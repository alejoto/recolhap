<?php
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
main_eval.eval_id asc, 
main_eval.t_st asc";
$result = mysqli_query($con,$sql);

$patientAux = ''; // Var for patient iteration control
$countEval = 0; // Var for count each eval by patient

?>
<!--main content here-->
<div class="">
  <div class="row" style="padding: 50px">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="span2">Fecha</th>
                <th class="span2">Paciente</th>
                <th class="span2">Investigador</th>
                <th class="span2">bld_gass_date</th>
                <th class="span2">bld_gass_fio2</th>
                <th class="span2">bld_gass_ph</th>
                <th class="span2">bld_gass_paco2</th>
                <th class="span2">bld_gass_pao2</th>
                <th class="span2">bld_gass_hco3</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
             $now = time(); // or your date as well
             $your_date = strtotime("2013-01-01");
             $datediff = $now - $your_date;
             //echo floor($datediff/(60*60*24));
            
            while($row = mysqli_fetch_array($result))
            {
                if($patientAux != $row['patient_id']) // Change to a new patient
                {
                    $patientAux = $row['patient_id'];
                    $firstEvalDate = $row['t_st'];
                    $countEval = 1;
                    $lastEvalDate = $firstEvalDate;
                }
                else // Is the same patient that the previous iteration
                {
                    $countEval++; // Add one more eval
                    $nowEvalDate = $row['t_st'];
                    
                    // Compare the time between this eval and the firs eval
                    $lastEvalDateArr = explode(" ",$lastEvalDate);
                    $lastEvalDateTime = strtotime($lastEvalDateArr[0]);
                    $nowEvalDateArr = explode(" ",$nowEvalDate);
                    $nowEvalDateTime = strtotime($nowEvalDateArr[0]);
                    $datediff = $nowEvalDateTime - $lastEvalDateTime;
                    $diffDays = floor($datediff/(60*60*24));
                    
                    if($diffDays > 30)
                    {
                        for($m=0; $m<floor($diffDays/30); $m++)
                        {
                            ?>
                            <tr>
                                <td class="span2">No hay evaluaciones en este mes</td>
                            </tr>
                            <?php
                        }
                    }
                    
                    $lastEvalDate = $nowEvalDate;
                }
            ?>
                <tr>
                    <td class="span2"><?php echo $row['t_st']; ?></td>
                    <td class="span2"><?php echo $row['name']; ?><br/><?php echo $row['surn']; ?></td>
                    <td class="span2"><?php echo $row['ivt_name']; ?><br/><?php echo $row['ivt_surname']; ?></td>
                    <td class="span2"><?php echo $row['res_vasc_pulm']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>