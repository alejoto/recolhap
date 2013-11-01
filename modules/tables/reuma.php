<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_reuma.reuma_date
,hap_reuma.reuma_fr
,hap_reuma.anticitrul
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_reuma LEFT JOIN  main_eval ON  main_eval.eval_id = hap_reuma.eval_id
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
                <th class="span2">reuma_date</th>
                <th class="span2">reuma_ana</th>
                <th class="span2">anti_ro</th>
                <th class="span2">anti_la</th>
                <th class="span2">anti_smt</th>
                <th class="span2">anti_rnp</th>
                <th class="span2">anti_u1rnp</th>
                <th class="span2">anti_u3rnp</th>
                <th class="span2">anti_jo</th>
                <th class="span2">rna_pol_3</th>
                <th class="span2">topiso_1</th>
                <th class="span2">centrom</th>
                <th class="span2">anti_slc</th>
                <th class="span2">anti_th_t0</th>
                <th class="span2">ss_dna</th>
                <th class="span2">ds_dna</th>
                <th class="span2">c_anca</th>
                <th class="span2">p_anca</th>
                <th class="span2">a_cardiolip_g</th>
                <th class="span2">a_cardiolip_m</th>
                <th class="span2">anticoag_lup</th>
                <th class="span2">a_2_cpl</th>
                <th class="span2">reuma_fr</th>
                <th class="span2">anticitrul</th>
                
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
                    <td class="span2"><?php echo $row['reuma_date']; ?></td>
                    <td class="span2"><?php echo $row['reuma_ana']; ?></td>
                    <td class="span2"><?php echo $row['anti_ro']; ?></td>
                    <td class="span2"><?php echo $row['anti_la']; ?></td>
                    <td class="span2"><?php echo $row['anti_smt']; ?></td>
                    <td class="span2"><?php echo $row['anti_rnp']; ?></td>
                    <td class="span2"><?php echo $row['anti_u1rnp']; ?></td>
                    <td class="span2"><?php echo $row['anti_u3rnp']; ?></td>
                    <td class="span2"><?php echo $row['anti_jo']; ?></td>
                    <td class="span2"><?php echo $row['rna_pol_3']; ?></td>
                    <td class="span2"><?php echo $row['topiso_1']; ?></td>
                    <td class="span2"><?php echo $row['centrom']; ?></td>
                    <td class="span2"><?php echo $row['anti_slc']; ?></td>
                    <td class="span2"><?php echo $row['anti_th_t0']; ?></td>
                    <td class="span2"><?php echo $row['ss_dna']; ?></td>
                    <td class="span2"><?php echo $row['ds_dna']; ?></td>
                    <td class="span2"><?php echo $row['c_anca']; ?></td>
                    <td class="span2"><?php echo $row['p_anca']; ?></td>
                    <td class="span2"><?php echo $row['a_cardiolip_g']; ?></td>
                    <td class="span2"><?php echo $row['a_cardiolip_m']; ?></td>
                    <td class="span2"><?php echo $row['anticoag_lup']; ?></td>
                    <td class="span2"><?php echo $row['a_2_cpl']; ?></td>
                    <td class="span2"><?php echo $row['reuma_fr']; ?></td>
                    <td class="span2"><?php echo $row['anticitrul']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>