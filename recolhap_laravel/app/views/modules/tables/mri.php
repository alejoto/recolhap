<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_mri.mri_date
,hap_mri.mri_fevd
,hap_mri.mri_hptsigns
,hap_mri.mri_main_art_diam
,hap_mri.mri_rt_art_diam
,hap_mri.mri_lt_art_diam
,hap_mri.mri_rt_heart_dilat
,hap_mri.mri_colat
,hap_mri.mri_defects
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_mri LEFT JOIN  main_eval ON  main_eval.eval_id = hap_mri.eval_id
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
                <th class="span2">mri_date</th>
                <th class="span2">mri_fevd</th>
                <th class="span2">mri_hptsigns</th>
                <th class="span2">mri_main_art_diam</th>
                <th class="span2">mri_rt_art_diam</th>
                <th class="span2">mri_lt_art_diam</th>
                <th class="span2">mri_rt_heart_dilat</th>
                <th class="span2">mri_colat</th>
                <th class="span2">mri_defects</th>
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
                    <td class="span2"><?php echo $row['mri_date']; ?></td>
                    <td class="span2"><?php echo $row['mri_fevd']; ?></td>
                    <td class="span2"><?php echo $row['mri_hptsigns']; ?></td>
                    <td class="span2"><?php echo $row['mri_main_art_diam']; ?></td>
                    <td class="span2"><?php echo $row['mri_rt_art_diam']; ?></td>
                    <td class="span2"><?php echo $row['mri_lt_art_diam']; ?></td>
                    <td class="span2"><?php echo $row['mri_rt_heart_dilat']; ?></td>
                    <td class="span2"><?php echo $row['mri_colat']; ?></td>
                    <td class="span2"><?php echo $row['mri_defects']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>