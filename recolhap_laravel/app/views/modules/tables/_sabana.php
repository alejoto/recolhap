<?php
/*
include '../DB/connect.php';
// Data in table main_patient left join add_data_patient
echo $sql    = "SELECT *
FROM main_eval 
LEFT JOIN hap_arterialgasses ON  main_eval.eval_id = hap_arterialgasses.eval_id
LEFT JOIN hap_cp_stress_test ON  main_eval.eval_id = hap_cp_stress_test.eval_id
LEFT JOIN hap_dimer_trop ON  main_eval.eval_id = hap_dimer_trop.eval_id
LEFT JOIN hap_drug_treatment ON  main_eval.eval_id = hap_drug_treatment.eval_id
LEFT JOIN hap_duplex_legs ON  main_eval.eval_id = hap_duplex_legs.eval_id
LEFT JOIN hap_ecocardio ON  main_eval.eval_id = hap_ecocardio.eval_id
LEFT JOIN hap_electrok ON  main_eval.eval_id = hap_electrok.eval_id
LEFT JOIN hap_first_eval ON  main_eval.eval_id = hap_first_eval.eval_id
LEFT JOIN hap_follow_up ON  main_eval.eval_id = hap_follow_up.eval_id
LEFT JOIN hap_gammagr ON  main_eval.eval_id = hap_gammagr.eval_id
LEFT JOIN hap_hb ON  main_eval.eval_id = hap_hb.eval_id
LEFT JOIN hap_hepatic ON  main_eval.eval_id = hap_hepatic.eval_id
LEFT JOIN hap_hyperclotting ON  main_eval.eval_id = hap_hyperclotting.eval_id
LEFT JOIN hap_mri ON  main_eval.eval_id = hap_mri.eval_id
LEFT JOIN hap_outcome ON  main_eval.eval_id = hap_outcome.eval_id
LEFT JOIN hap_pep_natr ON  main_eval.eval_id = hap_pep_natr.eval_id
LEFT JOIN hap_pulm_arteriography ON  main_eval.eval_id = hap_pulm_arteriography.eval_id
LEFT JOIN hap_renal ON  main_eval.eval_id = hap_renal.eval_id
LEFT JOIN hap_reuma ON  main_eval.eval_id = hap_reuma.eval_id
LEFT JOIN hap_right_cathet ON  main_eval.eval_id = hap_right_cathet.eval_id
LEFT JOIN hap_six_mins_walk ON  main_eval.eval_id = hap_six_mins_walk.eval_id
LEFT JOIN hap_spirometry ON  main_eval.eval_id = hap_spirometry.eval_id
LEFT JOIN hap_tc_angio ON  main_eval.eval_id = hap_tc_angio.eval_id
LEFT JOIN hap_vasoreact_test ON  main_eval.eval_id = hap_vasoreact_test.eval_id
LEFT JOIN hap_vih ON  main_eval.eval_id = hap_vih.eval_id
LEFT JOIN hap_x_ray ON  main_eval.eval_id = hap_x_ray.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id

GROUP BY main_eval.eval_id
ORDER BY 
main_patient.patient_id,
main_eval.t_st asc";
$result = mysqli_query($con,$sql);
*/

$patientAux = ''; // Var for patient iteration control
$patientCount = 0;
$arrayPatients; // Array with each patient id 
$arrayVars = array('doppl_type','ecg_lecture'); // Array with var to show
$arrayVars = array('arterialgasses_id','ecg_lecture'); // Array with var to show
$max_var_value; // Array for save the max value of periods for each var
$count_var_value; // Array to count the temporal max value of periods for each var
$arrayPatientData; // Array with each patiente data [array ('patient_id' => array('var1' => array('Per1','Per2','Per3'...)...)..)]]


    ###### T E S T ######
$arrTest[] = array('1','a','x'); // Test
$arraTest[] = array('2','b','y'); // Test

$con=mysqli_connect("localhost","","","neumo");

$sql    = "SELECT main_eval.patient_id, main_eval.eval_id, t_st";
// Concat to query, vars in $arrayVars
for($s=0;$s<count($arrayVars);$s++)
    $sql    .= ", ".$arrayVars[$s];
$sql    .= " FROM main_eval 
LEFT JOIN hap_arterialgasses ON  main_eval.eval_id = hap_arterialgasses.eval_id
LEFT JOIN hap_ecocardio ON  main_eval.eval_id = hap_ecocardio.eval_id
LEFT JOIN hap_electrok ON  main_eval.eval_id = hap_electrok.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id

GROUP BY main_eval.eval_id
ORDER BY 
main_patient.patient_id,
main_eval.t_st asc";
$result = mysqli_query($con,$sql);


?>
<!--main content here-->
<div class="">
  <div class="row" style="padding: 50px">
    <?php
            
    while($row = mysqli_fetch_array($result))
    {
        if($patientAux != $row['patient_id']) // If is a new patient, add it to de patients array and patientsData array
        {   
            $arrayPatients[]=$row['patient_id']; // Add to patients array
            $arrayPatientData[$row['patient_id']]; // Add to patients data array

            $firstEvalDate = $row['t_st']; // First Eval date
            $lastEvalDate = $firstEvalDate; // First Eval date y last eval date for now

            // Save patient data for firts period
            for($var=0;$var<count($arrayVars);$var++)
            {
                // For each var, save data for period 0 in current patient
                $arrayPatientData[$row['patient_id']][$arrayVars[$var]][0] = $row[$arrayVars[$var]];
                
                // Update max_var_value for this var if it is higher than the last one
                if($count_var_value[$arrayVars[$var]] > $max_var_value[$arrayVars[$var]])
                    $max_var_value[$arrayVars[$var]] = $count_var_value[$arrayVars[$var]];
                
                $count_var_value[$arrayVars[$var]] = 1; //Reset to 1 the var counter  for this var
            }
            $patientAux = $row['patient_id']; // Change $patiente_aux for next comparison
        }
        else // Is the same patient that the previous iteration
        {
            $nowEvalDate = $row['t_st'];

            // Compare the time between this eval and the firs eval to calculate current period
            $lastEvalDateArr = explode(" ",$lastEvalDate);
            $lastEvalDateTime = strtotime($lastEvalDateArr[0]);
            $nowEvalDateArr = explode(" ",$nowEvalDate);
            $nowEvalDateTime = strtotime($nowEvalDateArr[0]);
            $datediff = $nowEvalDateTime - $lastEvalDateTime;
            $diffDays = floor($datediff/(60*60*24));

            // Any value under 90 days, is de same period and isn't considered
            // After 91 days is a new period
            if($diffDays > 91)
            {
                for($var=0;$var<count($arrayVars);$var++)
                {   
                    $nextPeriod = count($arrayPatientData[$row['patient_id']][$arrayVars[$var]]);
                    
                    // If days between current and last evaluation are more than 91 days, 
                    // create empty values for these periods
                    for($m=0; $m<floor($diffDays/91)-1; $m++)
                    {
                        $arrayPatientData[$row['patient_id']][$arrayVars[$var]][$nextPeriod+$m] = "-";
                        $count_var_value[$arrayVars[$var]]++;
                    }
                    // Save data for current var in curren patient for calculated period
                    $arrayPatientData[$row['patient_id']][$arrayVars[$var]][$nextPeriod+$m] = $row[$arrayVars[$var]];
                    $count_var_value[$arrayVars[$var]]++;
                }
            }
            $lastEvalDate = $nowEvalDate;
        }
    }
    // Las pdate max_var_value for this var if it is higher than the last one
    for($var=0;$var<count($arrayVars);$var++)
    {
        if($count_var_value[$arrayVars[$var]] > $max_var_value[$arrayVars[$var]])
            $max_var_value[$arrayVars[$var]] = $count_var_value[$arrayVars[$var]];
    }
    
    // Now, build the table with collected data
    ?>
    <table class="table table-hover" border="1" cellpadding="3px" style="border-style: solid; border-color: #ccc; border-width: 1px; font-family: helvetica">
        <thead>
            <tr>
                <th class="span2">Paciente</th>
                <?php 
                for($vars=0; $vars<count($arrayVars); $vars++) 
                {
                ?>
                    <td class="span2" colspan="<?php echo $max_var_value[$arrayVars[$vars]]?>">
                        <?php echo $arrayVars[$vars]?>
                    </td>
                <?php 
                }
                ?>
            </tr>
            <tr>
                <th class="span2"></th>
                <?php 
                for($vars=0; $vars<count($arrayVars); $vars++) 
                {
                    for($v=0; $v<$max_var_value[$arrayVars[$vars]]; $v++) 
                    {
                    ?>
                        <td class="span2">Periodo <?php echo $v+1;?></td>
                    <?php 
                    } 
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            for($pt=0; $pt<count($arrayPatients); $pt++)
            {
            ?>
                <tr>
                    <td class="span2"><?php echo $ptDoc = $arrayPatients[$pt]?></td>
                    
                    <?php 
                    for($vars=0; $vars<count($arrayVars); $vars++) 
                    { 
                        for($v=0; $v<$max_var_value[$arrayVars[$vars]]; $v++) 
                        {
                        ?>
                            <td class="span2"><?php echo $arrayPatientData[$ptDoc][$arrayVars[$vars]][$v]?></td>
                        <?php 
                        } 
                    }
                    ?>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</div>
</div>