<?php 
session_start();
//if(isset($_SESSION['hap_patient_id'])) unset($_SESSION['hap_patient_id']);
//if(isset($_SESSION['evaluation'])) unset($_SESSION['evaluation']);

//$_SESSION['username']=$_GET['doctor'];
$_SESSION['hap_patient_id']=$_GET['patient'];
//echo $_GET['patient'];

//echo $_SESSION['username'];
header('location:../myaccount/start_eval_id.php');
 ?>