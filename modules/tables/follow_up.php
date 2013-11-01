<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_eval.t_st
,hap_follow_up.eval_date
,hap_follow_up.homeoxigen
,hap_follow_up.dailyhours_ox
,hap_follow_up.dyspnea
,hap_follow_up.cough
,hap_follow_up.chestpain
,hap_follow_up.loweredema
,hap_follow_up.hemoptysis
,hap_follow_up.syncope
,hap_follow_up.improved_symts
,hap_follow_up.pregnant
,hap_follow_up.weight
,hap_follow_up.height
,hap_follow_up.nyha_funct
,hap_follow_up.sat_ox
,hap_follow_up.pulse
,hap_follow_up.pres_art_exfco
,hap_follow_up.breathing
,hap_follow_up.trycuspid_murmur
,hap_follow_up.p2_greater_than_a2
,hap_follow_up.cyanosis
,hap_follow_up.hepatomegaly
,hap_follow_up.ef_edema
,hap_follow_up.ing_yu
,hap_follow_up.finger_clubbing
,main_patient.name
,main_patient.surn
,main_investigator.ivt_name
,main_investigator.ivt_surname
FROM hap_follow_up LEFT JOIN  main_eval ON  main_eval.eval_id = hap_follow_up.eval_id
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
                <th class="span2">eval_date</th>
                <th class="span2">homeoxigen</th>
                <th class="span2">dailyhours_ox</th>
                <th class="span2">dyspnea</th>
                <th class="span2">cough</th>
                <th class="span2">chestpain</th>
                <th class="span2">loweredema</th>
                <th class="span2">hemoptysis</th>
                <th class="span2">syncope</th>
                <th class="span2">improved_symts</th>
                <th class="span2">pregnant</th>
                <th class="span2">weight</th>
                <th class="span2">height</th>
                <th class="span2">nyha_funct</th>
                <th class="span2">sat_ox</th>
                <th class="span2">pulse</th>
                <th class="span2">pres_art_exfco</th>
                <th class="span2">breathing</th>
                <th class="span2">trycuspid_murmur</th>
                <th class="span2">p2_greater_than_a2</th>
                <th class="span2">cyanosis</th>
                <th class="span2">hepatomegaly</th>
                <th class="span2">ef_edema</th>
                <th class="span2">ing_yu</th>
                <th class="span2">finger_clubbing</th>
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
                    <td class="span2"><?php echo $row['eval_date']; ?></td>
                    <td class="span2"><?php echo $row['homeoxigen']; ?></td>
                    <td class="span2"><?php echo $row['dailyhours_ox']; ?></td>
                    <td class="span2"><?php echo $row['dyspnea']; ?></td>
                    <td class="span2"><?php echo $row['cough']; ?></td>
                    <td class="span2"><?php echo $row['chestpain']; ?></td>
                    <td class="span2"><?php echo $row['loweredema']; ?></td>
                    <td class="span2"><?php echo $row['hemoptysis']; ?></td>
                    <td class="span2"><?php echo $row['syncope']; ?></td>
                    <td class="span2"><?php echo $row['improved_symts']; ?></td>
                    <td class="span2"><?php echo $row['pregnant']; ?></td>
                    <td class="span2"><?php echo $row['weight']; ?></td>
                    <td class="span2"><?php echo $row['height']; ?></td>
                    <td class="span2"><?php echo $row['nyha_funct_class']; ?></td>
                    <td class="span2"><?php echo $row['sat_ox']; ?></td>
                    <td class="span2"><?php echo $row['pulse']; ?></td>
                    <td class="span2"><?php echo $row['pres_art_exfco']; ?></td>
                    <td class="span2"><?php echo $row['breathing']; ?></td>
                    <td class="span2"><?php echo $row['trycuspid_murmur']; ?></td>
                    <td class="span2"><?php echo $row['p2_greater_than_a2']; ?></td>
                    <td class="span2"><?php echo $row['cyanosis']; ?></td>
                    <td class="span2"><?php echo $row['hepatomegaly']; ?></td>
                    <td class="span2"><?php echo $row['ef_edema']; ?></td>
                    <td class="span2"><?php echo $row['ing_yu']; ?></td>
                    <td class="span2"><?php echo $row['finger_clubbing']; ?></td>            
                    
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>