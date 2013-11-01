<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_hemo_thyro.thyro_date
,hap_hemo_thyro.thyro_tsh
,hap_hemo_thyro.thyro_t_4_total
,hap_hemo_thyro.thyro_t_4_free
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_hemo_thyro LEFT JOIN  main_eval ON  main_eval.eval_id = hap_hemo_thyro.eval_id
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
                <th class="span2">thyro_date</th>
                <th class="span2">thyro_tsh</th>
                <th class="span2">thyro_t_4_total</th>
                <th class="span2">thyro_t_4_free</th>
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
                    <td class="span2"><?php echo $row['thyro_date']; ?></td>
                    <td class="span2"><?php echo $row['thyro_tsh']; ?></td>
                    <td class="span2"><?php echo $row['thyro_t_4_total']; ?></td>
                    <td class="span2"><?php echo $row['thyro_t_4_free']; ?></td>                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>