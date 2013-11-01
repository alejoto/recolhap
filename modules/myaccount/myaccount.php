<?php
ob_start();
session_start();
include '../DB/connect.php';


/*First redirect: if $page not set, redirecto to patients*/
if (isset($_GET["page"])) {$page = $_GET["page"];}
else {header('Location: myaccount.php?page=patients');}


$user_id=$_SESSION['username'];
/*
* $_SESSION['username'] starts:        login/ajax_login.php
*/
$result = mysqli_query($con,"SELECT * FROM main_investigator WHERE user_id='$user_id'"  );  
$row    = mysqli_fetch_array($result);

/*Second redirect: if user is not set, send to user register page*/
if ($row['user_id']==""&&$_GET["page"]!='user_register') 
	{ header('Location: myaccount.php?page=user_register'); }



/*Third redirect: if right catheter data is empty send to 'right catheter' form*/
 if (isset($_SESSION['evaluation'])&&isset($_SESSION['hap_patient_id'])&&$page!='right_catheter')
/*
* $_SESSION['evaluation'] starts: 		'myaccount/ajax_save_patient.php'
*								'myaccount/start_eval_id.php' 
* $_SESSION['hap_patient_id'] starts:  	'myaccount/ajax_search_patient.php' 
*								and 'myaccount/ajax_save_patient.php'
*/ 
{
  

  $docidnum=$_SESSION['hap_patient_id'];
  $digiter_id = $_SESSION['username'];

  //check if user has data on right catheter table
  $result=mysqli_query($con,"SELECT * FROM hap_right_cathet LEFT JOIN main_eval  
    ON hap_right_cathet.eval_id= main_eval.eval_id WHERE main_eval.patient_id = '$docidnum'  ");
  $row    = mysqli_fetch_array($result);

  // Redirect if right cath is empty
  if ($row[0] =="" || $row[0] ==null) {
    header('Location: myaccount.php?page=right_catheter');
  }
}

//load pages according to $page value
 if(isset($_SESSION['username'])){
  
  include '../includes/header.php';
  
  if($page == "user_register") include 'user_register.php';
  else if($page == "patients") include 'patients_search.php';
  else if($page == "statistics") include '../statistics/statistics.php';
  else if($page == "basic") include '../patient/basic.php';
  else if($page == "blood") include '../patient/blood.php';
  else if($page == "diagnostic") include '../patient/diagnostic.php';
  else if($page == "cardiovascular" ) include '../patient/cardiovascular.php';
  else if($page == "right_catheter" ) include '../patient/right_catheter.php';
  else if($page == "edit" ) include '../patient/edit.php';
  else if($page == "tables" ) include '../tables/index.php';
  else include 'patients_search.php';
  include '../includes/footer.php';
}else{ 
  header('Location: ../../index.php'); 
}
?>
