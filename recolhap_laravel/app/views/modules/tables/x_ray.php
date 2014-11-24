<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_x_ray.xray_date
,hap_x_ray.alveolar_infiltrates
,hap_x_ray.hypoperfusion_areas
,hap_x_ray.right_heart_cardiomeg
,hap_x_ray.pleur_effuss
,hap_x_ray.pulm_artery_prominent
,hap_x_ray.b_kerkey_lines
,hap_x_ray.pulm_cone_evertion
,hap_x_ray.pulm_art_diameter
,hap_x_ray.cardiothrx_index
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_x_ray LEFT JOIN  main_eval ON  main_eval.eval_id = hap_x_ray.eval_id
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
                <th class="span2">xray_date</th>
                <th class="span2">alveolar_infiltrates</th>
                <th class="span2">hypoperfusion_areas</th>
                <th class="span2">right_heart_cardiomeg</th>
                <th class="span2">pleur_effuss</th>
                <th class="span2">pulm_artery_prominent</th>
                <th class="span2">b_kerkey_lines</th>
                <th class="span2">pulm_cone_evertion</th>
                <th class="span2">pulm_art_diameter</th>
                <th class="span2">cardiothrx_index</th>
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
                    <td class="span2"><?php echo $row['xray_date']; ?></td>
                    <td class="span2"><?php echo $row['alveolar_infiltrates']; ?></td>
                    <td class="span2"><?php echo $row['hypoperfusion_areas']; ?></td>
                    <td class="span2"><?php echo $row['right_heart_cardiomeg']; ?></td>
                    <td class="span2"><?php echo $row['pleur_effuss']; ?></td>
                    <td class="span2"><?php echo $row['pulm_artery_prominent']; ?></td>
                    <td class="span2"><?php echo $row['b_kerkey_lines']; ?></td>
                    <td class="span2"><?php echo $row['pulm_cone_evertion']; ?></td>
                    <td class="span2"><?php echo $row['pulm_art_diameter']; ?></td>
                    <td class="span2"><?php echo $row['cardiothrx_index']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>