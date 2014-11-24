<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_hyperclotting.antiphs_syndr
,hap_hyperclotting.protr20210_mutation
,hap_hyperclotting.c_protein_resist
,hap_hyperclotting.antitrbiii_deficiency
,hap_hyperclotting.prot_s_deficiency
,hap_hyperclotting.prot_c_deficiency
,hap_hyperclotting.unspecific_tromboph
,hap_hyperclotting.hyperhomocist
,hap_hyperclotting.neoplasia
,hap_hyperclotting.other_hyperclott_disord
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_hyperclotting LEFT JOIN  main_eval ON  main_eval.eval_id = hap_hyperclotting.eval_id
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
                <th class="span2">antiphs_syndr</th>
                <th class="span2">protr20210_mutation</th>
                <th class="span2">c_protein_resist</th>
                <th class="span2">antitrbiii_deficiency</th>
                <th class="span2">prot_s_deficiency</th>
                <th class="span2">prot_c_deficiency</th>
                <th class="span2">unspecific_tromboph</th>
                <th class="span2">hyperhomocist</th>
                <th class="span2">neoplasia</th>
                <th class="span2">other_hyperclott_disord</th>
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
                    <td class="span2"><?php echo $row['antiphs_syndr']; ?></td>
                    <td class="span2"><?php echo $row['protr20210_mutation']; ?></td>
                    <td class="span2"><?php echo $row['c_protein_resist']; ?></td>
                    <td class="span2"><?php echo $row['antitrbiii_deficiency']; ?></td>
                    <td class="span2"><?php echo $row['prot_s_deficiency']; ?></td>
                    <td class="span2"><?php echo $row['prot_c_deficiency']; ?></td>
                    <td class="span2"><?php echo $row['unspecific_tromboph']; ?></td>
                    <td class="span2"><?php echo $row['hyperhomocist']; ?></td>
                    <td class="span2"><?php echo $row['neoplasia']; ?></td>
                    <td class="span2"><?php echo $row['other_hyperclott_disord']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>