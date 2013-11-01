<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_vasoreact_test.reactivity_date
,hap_vasoreact_test.reactivity
,hap_vasoreact_test.test_drug
,hap_vasoreact_test.post_res_vasc_pulm
,hap_vasoreact_test.post_res_vasc_pulm_unit
,hap_vasoreact_test.post_res_vasc_syst
,hap_vasoreact_test.post_res_vasc_syst_unit
,hap_vasoreact_test.post_pap_sys
,hap_vasoreact_test.post_pap_dias
,hap_vasoreact_test.post_pas_sys
,hap_vasoreact_test.post_pas_dias
,hap_vasoreact_test.post_rt_atr_press
,hap_vasoreact_test.post_pulm_wedg_press
,hap_vasoreact_test.post_pulm_gradient
,hap_vasoreact_test.post_cardiac_outp
,hap_vasoreact_test.post_cardiac_index
,hap_vasoreact_test.post_rt_ventr_oxim
,hap_vasoreact_test.post_pulm_artery
,hap_vasoreact_test.post_rt_atr_oxim
,hap_vasoreact_test.post_heart_rate
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_vasoreact_test LEFT JOIN  main_eval ON  main_eval.eval_id = hap_vasoreact_test.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id ";

// File that defines the permissions of the user logged
include_once('../tables/permission.php');
// If $table_total_permission is 'no', can see only his patients
if($table_total_permission == 'no')
    $sql    .= " where main_investigator.user_id = '".$_SESSION['username']."' ";

$sql    .= " ORDER BY main_patient.patient_id asc, t_st asc";
$result = mysqli_query($con,$sql);
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
                <th class="span2">reactivity_date</th>
                <th class="span2">reactivity</th>
                <th class="span2">test_drug</th>
                <th class="span2">post_res_vasc_pulm</th>
                <th class="span2">post_res_vasc_pulm_unit</th>
                <th class="span2">post_res_vasc_syst</th>
                <th class="span2">post_res_vasc_syst_unit</th>
                <th class="span2">post_pap_sys</th>
                <th class="span2">post_pap_dias</th>
                <th class="span2">post_pas_sys</th>
                <th class="span2">post_pas_dias</th>
                <th class="span2">post_rt_atr_press</th>
                <th class="span2">post_pulm_wedg_press</th>
                <th class="span2">post_pulm_gradient</th>
                <th class="span2">post_its_right</th>
                <th class="span2">post_its_left</th>
                <th class="span2">post_cardiac_outp</th>
                <th class="span2">post_cardiac_index</th>
                <th class="span2">post_rt_ventr_oxim</th>
                <th class="span2">post_pulm_artery</th>
                <th class="span2">post_rt_atr_oxim</th>
                <th class="span2">post_heart_rate</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result))
            {
            ?>
                <tr>
                    <td class="span2"><?php echo $row['t_st']; ?></td>
                    <td class="span2"><?php echo $row['name']; ?><br/><?php echo $row['surn']; ?></td>
                    <td class="span2"><?php echo $row['ivt_name']; ?><br/><?php echo $row['ivt_surname']; ?></td>
                    <td class="span2"><?php echo $row['reactivity_date']; ?></td>
                    <td class="span2"><?php echo $row['reactivity']; ?></td>
                    <td class="span2"><?php echo $row['test_drug']; ?></td>
                    <td class="span2"><?php echo $row['post_res_vasc_pulm']; ?></td>
                    <td class="span2"><?php echo $row['post_res_vasc_pulm_unit']; ?></td>
                    <td class="span2"><?php echo $row['post_res_vasc_syst']; ?></td>
                    <td class="span2"><?php echo $row['post_res_vasc_syst_unit']; ?></td>
                    <td class="span2"><?php echo $row['post_pap_sys']; ?></td>
                    <td class="span2"><?php echo $row['post_pap_dias']; ?></td>
                    <td class="span2"><?php echo $row['post_pas_sys']; ?></td>
                    <td class="span2"><?php echo $row['post_pas_dias']; ?></td>
                    <td class="span2"><?php echo $row['post_rt_atr_press']; ?></td>
                    <td class="span2"><?php echo $row['post_pulm_wedg_press']; ?></td>
                    <td class="span2"><?php echo $row['post_pulm_gradient']; ?></td>
                    <td class="span2"><?php echo $row['post_its_right']; ?></td>
                    <td class="span2"><?php echo $row['post_its_left']; ?></td>
                    <td class="span2"><?php echo $row['post_cardiac_outp']; ?></td>
                    <td class="span2"><?php echo $row['post_cardiac_index']; ?></td>
                    <td class="span2"><?php echo $row['post_rt_ventr_oxim']; ?></td>
                    <td class="span2"><?php echo $row['post_pulm_artery']; ?></td>
                    <td class="span2"><?php echo $row['post_rt_atr_oxim']; ?></td>
                    <td class="span2"><?php echo $row['post_heart_rate']; ?></td>
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>