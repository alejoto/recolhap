<?php
  ob_start();
  session_start();
  include '../DB/connect.php';
  
  $gender = $_POST['gender'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $year = $_POST['year'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $citybth = $_POST['citybth'];
  $countrybth = $_POST['countrybth'];
  $user_id = $_SESSION['username'];
  $docidnum = $_POST['docidnum'];
  $birthd = $year.'-'.$month.'-'.$day;
  $statebth = $_POST['statebth'];
  $actual_date = date('Y-m-d', time());

//replace stressed vowles
  $name=str_replace("Á","A",$name);
  $name=str_replace("É","E",$name);
  $name=str_replace("Í","I",$name);
  $name=str_replace("Ó","O",$name);
  $name=str_replace("Ú","U",$name);
  $name=str_replace("À","A",$name);
  $name=str_replace("È","E",$name);
  $name=str_replace("Ì","I",$name);
  $name=str_replace("Ò","O",$name);
  $name=str_replace("Ù","U",$name);
  $name=str_replace("Ä","A",$name);
  $name=str_replace("Ë","E",$name);
  $name=str_replace("Ï","I",$name);
  $name=str_replace("Ö","O",$name);
  $name=str_replace("Ü","U",$name);
  $name=str_replace("Ñ","N",$name);

  $surname=str_replace("Á","A",$surname);
  $surname=str_replace("É","E",$surname);
  $surname=str_replace("Í","I",$surname);
  $surname=str_replace("Ó","O",$surname);
  $surname=str_replace("Ú","U",$surname);
  $surname=str_replace("À","A",$surname);
  $surname=str_replace("È","E",$surname);
  $surname=str_replace("Ì","I",$surname);
  $surname=str_replace("Ò","O",$surname);
  $surname=str_replace("Ù","U",$surname);
  $surname=str_replace("Ä","A",$surname);
  $surname=str_replace("Ë","E",$surname);
  $surname=str_replace("Ï","I",$surname);
  $surname=str_replace("Ö","O",$surname);
  $surname=str_replace("Ü","U",$surname);
  $surname=str_replace("Ñ","N",$surname);

  $citybth=str_replace("Á","A",$citybth);
  $citybth=str_replace("É","E",$citybth);
  $citybth=str_replace("Í","I",$citybth);
  $citybth=str_replace("Ó","O",$citybth);
  $citybth=str_replace("Ú","U",$citybth);
  $citybth=str_replace("À","A",$citybth);
  $citybth=str_replace("È","E",$citybth);
  $citybth=str_replace("Ì","I",$citybth);
  $citybth=str_replace("Ò","O",$citybth);
  $citybth=str_replace("Ù","U",$citybth);
  $citybth=str_replace("Ä","A",$citybth);
  $citybth=str_replace("Ë","E",$citybth);
  $citybth=str_replace("Ï","I",$citybth);
  $citybth=str_replace("Ö","O",$citybth);
  $citybth=str_replace("Ü","U",$citybth);
  $citybth=str_replace("Ñ","N",$citybth);

  $countrybth=str_replace("Á","A",$countrybth);
  $countrybth=str_replace("É","E",$countrybth);
  $countrybth=str_replace("Í","I",$countrybth);
  $countrybth=str_replace("Ó","O",$countrybth);
  $countrybth=str_replace("Ú","U",$countrybth);
  $countrybth=str_replace("À","A",$countrybth);
  $countrybth=str_replace("È","E",$countrybth);
  $countrybth=str_replace("Ì","I",$countrybth);
  $countrybth=str_replace("Ò","O",$countrybth);
  $countrybth=str_replace("Ù","U",$countrybth);
  $countrybth=str_replace("Ä","A",$countrybth);
  $countrybth=str_replace("Ë","E",$countrybth);
  $countrybth=str_replace("Ï","I",$countrybth);
  $countrybth=str_replace("Ö","O",$countrybth);
  $countrybth=str_replace("Ü","U",$countrybth);
  $countrybth=str_replace("Ñ","N",$countrybth);

  $statebth=str_replace("Á","A",$statebth);
  $statebth=str_replace("É","E",$statebth);
  $statebth=str_replace("Í","I",$statebth);
  $statebth=str_replace("Ó","O",$statebth);
  $statebth=str_replace("Ú","U",$statebth);
  $statebth=str_replace("À","A",$statebth);
  $statebth=str_replace("È","E",$statebth);
  $statebth=str_replace("Ì","I",$statebth);
  $statebth=str_replace("Ò","O",$statebth);
  $statebth=str_replace("Ù","U",$statebth);
  $statebth=str_replace("Ä","A",$statebth);
  $statebth=str_replace("Ë","E",$statebth);
  $statebth=str_replace("Ï","I",$statebth);
  $statebth=str_replace("Ö","O",$statebth);
  $statebth=str_replace("Ü","U",$statebth);
  $statebth=str_replace("Ñ","N",$statebth);





    
  if( !$gender || !$name || !$surname || !$year || !$month || !$day || !$citybth || !$countrybth ){
    header('Location: ../myaccount/myaccount.php?page=patients'); 
  }else{
    mysqli_query($con,"INSERT INTO main_patient (
      patient_id, timestamp, name, surn, gender, birthd, countrybth, citybth, statebth, digiter_id) 
      VALUES ('".$docidnum."', '".$actual_date."', '".$name."', '".$surname."', '".$gender."', '".$birthd."', '".$countrybth."', '".$citybth."', '".$statebth."', '".$user_id."')");

    /// In this part when the patient is add to the data base, also it's recorded the main_eval, to keep the conection between the doctor and the patient 
    
    $digiter_id = $_SESSION['username'];
    //$tms=time();
    mysqli_query($con,"INSERT INTO main_eval (patient_id, digiter_id) VALUES ('$docidnum', '$digiter_id' );"); 
    
    // Search for the generated ID

    $search_sql=("SELECT MAX(eval_id) FROM main_eval WHERE patient_id = '$docidnum' AND digiter_id = '$digiter_id'");
    $search_result = mysqli_query($con,$search_sql);
    $eval_id_arr = mysqli_fetch_array($search_result);

    //Asigning 'evaluation' session as eval_id for foraing keys in health tables
    $_SESSION['evaluation'] = $eval_id_arr[0];

    //Asigning 'hap_patient_id' session as patient for info.php MySQL query
    $_SESSION['hap_patient_id']=$docidnum;

    $patient = $docidnum."-".$name."-".$surname."-";
    $patient .= $gender."-".$birthd."-".$countrybth."-";
    $patient .= $citybth."-".$statebth."-".$user_id;
    
    $_SESSION['patient'] = $patient;
    header('Location: ../myaccount/myaccount.php?page=basic');     
  }
?>