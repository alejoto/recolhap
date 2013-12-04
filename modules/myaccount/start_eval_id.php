<?php 

include '../DB/connect.php';
session_start();
if (!isset($_SESSION['hap_patient_id'])||!isset($_SESSION['username'])) { header("location:myaccount.php?page=patients"); }



$docidnum=$_SESSION['hap_patient_id'];
$digiter_id = $_SESSION['username'];


//adding event to table main eval

$start_main_eval=mysqli_query($con,"INSERT INTO main_eval (patient_id, digiter_id) VALUES ('$docidnum', '$digiter_id');");



if ($start_main_eval) {

	/*select MAX ensueres to select latest eval id entered, filtered by user (digiter) and patient (doc_id)*/

	$search_sql=("SELECT MAX(eval_id) FROM main_eval WHERE patient_id = '$docidnum' AND digiter_id = '$digiter_id'");
	$search_result = mysqli_query($con,$search_sql);
	$eval_id_arr = mysqli_fetch_array($search_result);

	/*asjusting session variable for unique main eval id*/
	$_SESSION['evaluation'] = $eval_id_arr[0];

}



//check if user has data on right catheter table

$result=mysqli_query($con,"SELECT * FROM hap_right_cathet LEFT JOIN main_eval 
	ON hap_right_cathet.eval_id= main_eval.eval_id WHERE main_eval.patient_id = '$docidnum'  ");
$row    = mysqli_fetch_array($result);



//redirect to right catheter if query=0

if ($row[0] =="") {header('Location: myaccount.php?page=right_catheter'); }



//redirect to the main form

header('Location: myaccount.php?page=basic'); 

?>

