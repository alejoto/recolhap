<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_hepatic.hep_date
,hap_hepatic.hep_albumin
,hap_hepatic.hep_ast
,hap_hepatic.hep_alt
,hap_hepatic.hep_fal
,hap_hepatic.hep_ggt
,hap_hepatic.bili_tot
,hap_hepatic.bili_dir
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_hepatic LEFT JOIN  main_eval ON  main_eval.eval_id = hap_hepatic.eval_id
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
                <th class="span2">hep_date</th>
                <th class="span2">hep_albumin</th>
                <th class="span2">hep_tpt</th>
                <th class="span2">hep_tp</th>
                <th class="span2">hep_inr</th>
                <th class="span2">hep_ast</th>
                <th class="span2">hep_alt</th>
                <th class="span2">hep_fal</th>
                <th class="span2">hep_ggt</th>
                <th class="span2">bili_tot</th>
                <th class="span2">bili_dir</th>
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
                    <td class="span2"><?php echo $row['hep_date']; ?></td>
                    <td class="span2"><?php echo $row['hep_albumin']; ?></td>
                    <td class="span2"><?php echo $row['hep_tpt']; ?></td>
                    <td class="span2"><?php echo $row['hep_tp']; ?></td>
                    <td class="span2"><?php echo $row['hep_inr']; ?></td>
                    <td class="span2"><?php echo $row['hep_ast']; ?></td>
                    <td class="span2"><?php echo $row['hep_alt']; ?></td>
                    <td class="span2"><?php echo $row['hep_fal']; ?></td>
                    <td class="span2"><?php echo $row['hep_ggt']; ?></td>
                    <td class="span2"><?php echo $row['bili_tot']; ?></td>
                    <td class="span2"><?php echo $row['bili_dir']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>