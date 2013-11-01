<?php 
$usr=$_SESSION['hap_patient_id'];
include '../DB/connect.php';

$sql    = "SELECT * FROM hap_hyperclotting 
LEFT JOIN main_eval 
ON hap_hyperclotting.eval_id=main_eval.eval_id  
WHERE main_eval.patient_id='".$usr."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>