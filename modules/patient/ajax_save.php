<?php

	include '../DB/connect.php';
	session_start();
  
  	$info = $_POST['info']; // Ejemplo: patient_id,timestamp,name,etc?'1','1999-12-01 12:00:00','Jhon'
  	$table = $_POST['table'];

  	$pieces = explode("?", $info); // La primera pieza son los nombres, la segunda los grupos de valores unidos por 
    	
	//// Need to append the value of the new colum (eval_id) and the value of eval_id generated before ////
	$eval_id = $_SESSION['evaluation'];
	
	/*$test[] = explode(",", $pieces[1]);
	echo $pieces[0];
	echo test;
	echo $table;
	*/
	
	$sql1 = "SELECT * FROM ".$table." WHERE ";
	
	
  	$sql = "INSERT INTO ".$table." (".$pieces[0].",eval_id) VALUES ('" . implode("', '", explode(",", $pieces[1])) . "','$eval_id')";
  	//echo $sql;
		if( !mysqli_query($con,$sql) ){
    	echo 'No';
    	die('Error: ' . mysql_error());
  	}

  	mysqli_close($con);
  	echo 'Yes';
  
?>
