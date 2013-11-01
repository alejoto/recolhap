<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_right_cathet.rt_cat_date
,hap_right_cathet.res_vasc_pulm
,hap_right_cathet.res_vasc_pulm_unit
,hap_right_cathet.res_vasc_syst
,hap_right_cathet.res_vasc_syst_unit
,hap_right_cathet.pap_sys
,hap_right_cathet.pap_dias
,hap_right_cathet.pas_sys
,hap_right_cathet.pas_dias
,hap_right_cathet.rt_atr_press
,hap_right_cathet.pulm_wedg_press
,hap_right_cathet.pulm_gradient
,hap_right_cathet.its_right
,hap_right_cathet.its_left
,hap_right_cathet.cardiac_outp
,hap_right_cathet.cardiac_index
,hap_right_cathet.rt_atr_oxim
,hap_right_cathet.rt_ventr_oxim
,hap_right_cathet.pulm_artery
,hap_right_cathet.heart_rate
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_right_cathet LEFT JOIN  main_eval ON  main_eval.eval_id = hap_right_cathet.eval_id
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
                <th class="span2">rt_cat_date</th>
                <th class="span2">res_vasc_pulm</th>
                <th class="span2">res_vasc_pulm_unit</th>
                <th class="span2">res_vasc_syst</th>
                <th class="span2">res_vasc_syst_unit</th>
                <th class="span2">pap_sys</th>
                <th class="span2">pap_dias</th>
                <th class="span2">pas_sys</th>
                <th class="span2">pas_dias</th>
                <th class="span2">rt_atr_press</th>
                <th class="span2">pulm_wedg_press</th>
                <th class="span2">pulm_gradient</th>
                <th class="span2">its_right</th>
                <th class="span2">its_left</th>
                <th class="span2">cardiac_outp</th>
                <th class="span2">cardiac_index</th>
                <th class="span2">rt_atr_oxim</th>
                <th class="span2">rt_ventr_oxim</th>
                <th class="span2">pulm_artery</th>
                <th class="span2">heart_rate</th>                
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
                    <td class="span2"><?php echo $row['rt_cat_date']; ?></td>
                    <td class="span2"><?php echo $row['res_vasc_pulm']; ?></td>
                    <td class="span2"><?php echo $row['res_vasc_pulm_unit']; ?></td>
                    <td class="span2"><?php echo $row['res_vasc_syst']; ?></td>
                    <td class="span2"><?php echo $row['res_vasc_syst_unit']; ?></td>
                    <td class="span2"><?php echo $row['pap_sys']; ?></td>
                    <td class="span2"><?php echo $row['pap_dias']; ?></td>
                    <td class="span2"><?php echo $row['pas_sys']; ?></td>
                    <td class="span2"><?php echo $row['pas_dias']; ?></td>
                    <td class="span2"><?php echo $row['rt_atr_press']; ?></td>
                    <td class="span2"><?php echo $row['pulm_wedg_press']; ?></td>
                    <td class="span2"><?php echo $row['pulm_gradient']; ?></td>
                    <td class="span2"><?php echo $row['its_right']; ?></td>
                    <td class="span2"><?php echo $row['its_left']; ?></td>
                    <td class="span2"><?php echo $row['cardiac_outp']; ?></td>
                    <td class="span2"><?php echo $row['cardiac_index']; ?></td>
                    <td class="span2"><?php echo $row['rt_atr_oxim']; ?></td>
                    <td class="span2"><?php echo $row['rt_ventr_oxim']; ?></td>
                    <td class="span2"><?php echo $row['pulm_artery']; ?></td>
                    <td class="span2"><?php echo $row['heart_rate']; ?></td>
                    
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>