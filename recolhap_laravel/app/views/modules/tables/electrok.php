<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_electrok.ecg_date
,hap_electrok.ecg_lecture
,hap_electrok.right_axis_deviation
,hap_electrok.siqiiitiii_pattern
,hap_electrok.sinus_tachyc
,hap_electrok.right_branch_block
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_electrok LEFT JOIN  main_eval ON  main_eval.eval_id = hap_electrok.eval_id
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
                <th class="span2">ecg_date</th>
                <th class="span2">ecg_lecture</th>
                <th class="span2">right_axis_deviation</th>
                <th class="span2">siqiiitiii_pattern</th>
                <th class="span2">sinus_tachyc</th>
                <th class="span2">right_branch_block</th>
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
                    <td class="span2"><?php echo $row['ecg_date']; ?></td>
                    <td class="span2"><?php echo $row['ecg_lecture']; ?></td>
                    <td class="span2"><?php echo $row['right_axis_deviation']; ?></td>
                    <td class="span2"><?php echo $row['siqiiitiii_pattern']; ?></td>
                    <td class="span2"><?php echo $row['sinus_tachyc']; ?></td>
                    <td class="span2"><?php echo $row['right_branch_block']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>