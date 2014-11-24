<?php
  ob_start();
  session_start();
  if (isset($_POST['mobile'])){$mobile=$_POST['mobile'];}
  if (isset($_POST['phone'])){$phone=$_POST['phone'];}
  if (isset($_POST['eps'])){$eps=$_POST['eps'];}
  if (isset($_POST['countryreside'])){$countryreside=$_POST['countryreside'];}
  if (isset($_POST['cityreside'])){$cityreside=$_POST['cityreside'];}
	
  
  //TODO Don't make sense a mobile number with letters!!!
  $mobile=str_replace("Á","A",$mobile);
  $mobile=str_replace("É","E",$mobile);
  $mobile=str_replace("Í","I",$mobile);
  $mobile=str_replace("Ó","O",$mobile);
  $mobile=str_replace("Ú","U",$mobile);
  $mobile=str_replace("À","A",$mobile);
  $mobile=str_replace("È","E",$mobile);
  $mobile=str_replace("Ì","I",$mobile);
  $mobile=str_replace("Ò","O",$mobile);
  $mobile=str_replace("Ù","U",$mobile);
  $mobile=str_replace("Ä","A",$mobile);
  $mobile=str_replace("Ë","E",$mobile);
  $mobile=str_replace("Ï","I",$mobile);
  $mobile=str_replace("Ö","O",$mobile);
  $mobile=str_replace("Ü","U",$mobile);
  $mobile=str_replace("Ñ","N",$mobile);
	
  //TODO don´t make sense a phone number with letters!!!
  $phone=str_replace("Á","A",$phone);
  $phone=str_replace("É","E",$phone);
  $phone=str_replace("Í","I",$phone);
  $phone=str_replace("Ó","O",$phone);
  $phone=str_replace("Ú","U",$phone);
  $phone=str_replace("À","A",$phone);
  $phone=str_replace("È","E",$phone);
  $phone=str_replace("Ì","I",$phone);
  $phone=str_replace("Ò","O",$phone);
  $phone=str_replace("Ù","U",$phone);
  $phone=str_replace("Ä","A",$phone);
  $phone=str_replace("Ë","E",$phone);
  $phone=str_replace("Ï","I",$phone);
  $phone=str_replace("Ö","O",$phone);
  $phone=str_replace("Ü","U",$phone);
  $phone=str_replace("Ñ","N",$phone);

  $eps=str_replace("Á","A",$eps);
  $eps=str_replace("É","E",$eps);
  $eps=str_replace("Í","I",$eps);
  $eps=str_replace("Ó","O",$eps);
  $eps=str_replace("Ú","U",$eps);
  $eps=str_replace("À","A",$eps);
  $eps=str_replace("È","E",$eps);
  $eps=str_replace("Ì","I",$eps);
  $eps=str_replace("Ò","O",$eps);
  $eps=str_replace("Ù","U",$eps);
  $eps=str_replace("Ä","A",$eps);
  $eps=str_replace("Ë","E",$eps);
  $eps=str_replace("Ï","I",$eps);
  $eps=str_replace("Ö","O",$eps);
  $eps=str_replace("Ü","U",$eps);
  $eps=str_replace("Ñ","N",$eps);

  $countryreside=str_replace("Á","A",$countryreside);
  $countryreside=str_replace("É","E",$countryreside);
  $countryreside=str_replace("Í","I",$countryreside);
  $countryreside=str_replace("Ó","O",$countryreside);
  $countryreside=str_replace("Ú","U",$countryreside);
  $countryreside=str_replace("À","A",$countryreside);
  $countryreside=str_replace("È","E",$countryreside);
  $countryreside=str_replace("Ì","I",$countryreside);
  $countryreside=str_replace("Ò","O",$countryreside);
  $countryreside=str_replace("Ù","U",$countryreside);
  $countryreside=str_replace("Ä","A",$countryreside);
  $countryreside=str_replace("Ë","E",$countryreside);
  $countryreside=str_replace("Ï","I",$countryreside);
  $countryreside=str_replace("Ö","O",$countryreside);
  $countryreside=str_replace("Ü","U",$countryreside);
  $countryreside=str_replace("Ñ","N",$countryreside);

  $cityreside=str_replace("Á","A",$cityreside);
  $cityreside=str_replace("É","E",$cityreside);
  $cityreside=str_replace("Í","I",$cityreside);
  $cityreside=str_replace("Ó","O",$cityreside);
  $cityreside=str_replace("Ú","U",$cityreside);
  $cityreside=str_replace("À","A",$cityreside);
  $cityreside=str_replace("È","E",$cityreside);
  $cityreside=str_replace("Ì","I",$cityreside);
  $cityreside=str_replace("Ò","O",$cityreside);
  $cityreside=str_replace("Ù","U",$cityreside);
  $cityreside=str_replace("Ä","A",$cityreside);
  $cityreside=str_replace("Ë","E",$cityreside);
  $cityreside=str_replace("Ï","I",$cityreside);
  $cityreside=str_replace("Ö","O",$cityreside);
  $cityreside=str_replace("Ü","U",$cityreside);
  $cityreside=str_replace("Ñ","N",$cityreside);

  include '../DB/connect.php';
  
  $id=$_SESSION['hap_patient_id'];
  $result = mysqli_query($con,"SELECT * FROM add_data_patient WHERE patient_id='$id'"  ); 
  $row    = mysqli_fetch_array($result);

  // if the query returns values
  if ($row[0] !="" || $row[0] !=null) 
  {
    $sql="UPDATE add_data_patient 
    SET mobile='$mobile'
    ,phone='$phone'
    ,eps='$eps'
    ,countryreside='$countryreside'
    ,cityreside='$cityreside'
    WHERE patient_id='$id' ";
    
    // if the querry ends in a FAILURE, msqli_query returns FALSE
    if (!mysqli_query($con,$sql)) { 
    	die('Error: '.mysqli_error()."first one"); 
    }
    else{
    	header("location: ../myaccount/myaccount.php?page=edit&saved=yes ");
    }
  }
  // if there is no values, insert the new ones
  else {
    $sql="INSERT INTO add_data_patient (mobile,phone,eps,countryreside,cityreside,patient_id)
    VALUES ('$mobile','$phone','$eps','$countryreside','$cityreside','$id' )";
    if (!mysqli_query($con,$sql)) { 
    	die('Error: '.mysqli_error()."Second one"); 
    } 
    else{
    	header("location: ../myaccount/myaccount.php?page=edit&saved=yes ");
    }
  }
?>