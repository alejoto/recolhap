<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_reuma_enas.enas_date
,hap_reuma_enas.enas_anti_ro
,hap_reuma_enas.enas_anti_la
,hap_reuma_enas.enas_anti_smith
,hap_reuma_enas.enas_anti_rnp
,hap_reuma_enas.enas_antiRNP70
,hap_reuma_enas.enas_anti_u3
,hap_reuma_enas.enas_antijo
,hap_reuma_enas.enas_anti_scl
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_reuma_enas LEFT JOIN  main_eval ON  main_eval.eval_id = hap_reuma_enas.eval_id
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
                <th class="span2">enas_date</th>
                <th class="span2">enas_anti_ro</th>
                <th class="span2">enas_anti_la</th>
                <th class="span2">enas_anti_smith</th>
                <th class="span2">enas_anti_rnp</th>
                <th class="span2">enas_antiRNP70</th>
                <th class="span2">enas_anti_u3</th>
                <th class="span2">enas_antijo</th>
                <th class="span2">enas_anti_scl</th>
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
                    <td class="span2"><?php echo $row['enas_date']; ?></td>
                    <td class="span2"><?php echo $row['enas_anti_ro']; ?></td>
                    <td class="span2"><?php echo $row['enas_anti_la']; ?></td>
                    <td class="span2"><?php echo $row['enas_anti_smith']; ?></td>
                    <td class="span2"><?php echo $row['enas_anti_rnp']; ?></td>
                    <td class="span2"><?php echo $row['enas_antiRNP70']; ?></td>
                    <td class="span2"><?php echo $row['enas_anti_u3']; ?></td>
                    <td class="span2"><?php echo $row['enas_antijo']; ?></td>
                    <td class="span2"><?php echo $row['enas_anti_scl']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>