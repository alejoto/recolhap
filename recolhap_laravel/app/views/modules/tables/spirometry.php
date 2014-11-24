<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_spirometry.spirodate
,hap_spirometry.cvf_lt
,hap_spirometry.cvf_percent
,hap_spirometry.vef1_lt
,hap_spirometry.vef1_percent
,hap_spirometry.vef1_cvf
,hap_spirometry.bronchodil_changes
,hap_spirometry.dlco_percent
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_spirometry LEFT JOIN  main_eval ON  main_eval.eval_id = hap_spirometry.eval_id
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
                <th class="span2">spirodate</th>
                <th class="span2">cvf_lt</th>
                <th class="span2">cvf_percent</th>
                <th class="span2">vef1_lt</th>
                <th class="span2">vef1_percent</th>
                <th class="span2">vef1_cvf</th>
                <th class="span2">bronchodil_changes</th>
                <th class="span2">dlco_percent</th>
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
                    <td class="span2"><?php echo $row['spirodate']; ?></td>
                    <td class="span2"><?php echo $row['cvf_lt']; ?></td>
                    <td class="span2"><?php echo $row['cvf_percent']; ?></td>
                    <td class="span2"><?php echo $row['vef1_lt']; ?></td>
                    <td class="span2"><?php echo $row['vef1_percent']; ?></td>
                    <td class="span2"><?php echo $row['vef1_cvf']; ?></td>
                    <td class="span2"><?php echo $row['bronchodil_changes']; ?></td>
                    <td class="span2"><?php echo $row['dlco_percent']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>