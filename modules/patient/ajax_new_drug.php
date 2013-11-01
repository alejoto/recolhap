<?php 
include '../DB/connect.php';
session_start();
$eval_id=$_SESSION['evaluation'];
$ptn=$_SESSION['hap_patient_id'];


if (isset($_POST['drug'])&&isset($_POST['drugdate'])) {
	$drug=$_POST['drug'];
	$drugdate=$_POST['drugdate'];
	$confirm=$_POST['confirm'];
	
	//search if drug has been previously inserted in order to avoid repeated data
	$sql    = "SELECT * FROM hap_drug_treatment LEFT JOIN main_eval 
	ON hap_drug_treatment.eval_id=main_eval.eval_id 
	WHERE hap_drug_treatment.drug='$drug' AND main_eval.patient_id='$ptn'  ";
	$result = mysqli_query($con,$sql);
	$row    = mysqli_fetch_array($result);
	

	//avoid saving data if repeated
	if ($row[0] !="" || $row[0] !=null &&$confirm=='' ) {
		echo 'exist';
	}
	else {
		mysqli_query($con,"INSERT INTO hap_drug_treatment (drug, drug_ini, eval_id) VALUES ('".$drug."', '".$drugdate."','$eval_id')");
	}
	$row    = mysqli_fetch_array($result);
}


?>