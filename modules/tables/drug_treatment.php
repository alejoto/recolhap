<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_drug_treatment.drug
,hap_drug_treatment.drug_other
,hap_drug_treatment.dosis
,hap_drug_treatment.drug_ini
,hap_drug_treatment.drug_end
,hap_drug_treatment.suspend_cause
,hap_drug_treatment.drug_adv_event
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_drug_treatment LEFT JOIN  main_eval ON  main_eval.eval_id = hap_drug_treatment.eval_id
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
                <th class="span2">Droga</th>
                <th class="span2">Otra Droga</th>
                <th class="span2">Fecha Inicio</th>
                <th class="span2">Fecha fin</th>
                <th class="span2">Causa de suspenci&oacute;n</th>
                <th class="span2">drug_adv_event</th>
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
                    <td class="span2"><?php echo $row['drug']; ?></td>
                    <td class="span2"><?php echo $row['drug_other']; ?></td>
                    <td class="span2"><?php echo $row['dosis']; ?></td>
                    <td class="span2"><?php echo $row['drug_ini']; ?></td>
                    <td class="span2"><?php echo $row['drug_end']; ?></td>
                    <td class="span2"><?php echo $row['suspend_cause']; ?></td>
                    <td class="span2"><?php echo $row['drug_adv_event']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>