<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_ecocardio.doppl_date
,hap_ecocardio.doppl_type
,hap_ecocardio.doppl_syst_press
,hap_ecocardio.doppl_right_dilat
,hap_ecocardio.doppl_right_dysf
,hap_ecocardio.doppl_pleur_effuss
,hap_ecocardio.left_heart_dysf
,hap_ecocardio.eject_fract
,hap_ecocardio.tapse
,hap_ecocardio.doppl_cong_defects
,hap_ecocardio.doppl_septum_dev
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_ecocardio LEFT JOIN  main_eval ON  main_eval.eval_id = hap_ecocardio.eval_id
LEFT JOIN main_investigator on main_investigator.user_id = main_eval.digiter_id
LEFT JOIN main_patient on main_patient.patient_id = main_eval.patient_id ";

// File that defines the permissions of the user logged
include_once('../tables/permission.php');
// If $table_total_permission is 'no', can see only his patients
if($table_total_permission == 'no')
    $sql    .= " where main_investigator.user_id = '".$_SESSION['username']."' ";

$sql    .= "ORDER BY main_patient.patient_id asc, t_st asc";
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
                <th class="span2">doppl_date</th>
                <th class="span2">doppl_type</th>
                <th class="span2">doppl_syst_press</th>
                <th class="span2">doppl_right_dilat</th>
                <th class="span2">doppl_right_dysf</th>
                <th class="span2">doppl_pleur_effuss</th>
                <th class="span2">left_heart_dysf</th>
                <th class="span2">eject_fract</th>
                <th class="span2">tapse</th>
                <th class="span2">doppl_cong_defects</th>
                <th class="span2">doppl_septum_dev</th>
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
                    <td class="span2"><?php echo $row['doppl_date']; ?></td>
                    <td class="span2"><?php echo $row['doppl_type']; ?></td>
                    <td class="span2"><?php echo $row['doppl_syst_press']; ?></td>
                    <td class="span2"><?php echo $row['doppl_right_dilat']; ?></td>
                    <td class="span2"><?php echo $row['doppl_right_dysf']; ?></td>
                    <td class="span2"><?php echo $row['doppl_pleur_effuss']; ?></td>
                    <td class="span2"><?php echo $row['left_heart_dysf']; ?></td>
                    <td class="span2"><?php echo $row['eject_fract']; ?></td>
                    <td class="span2"><?php echo $row['tapse']; ?></td>
                    <td class="span2"><?php echo $row['doppl_cong_defects']; ?></td>
                    <td class="span2"><?php echo $row['doppl_septum_dev']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>