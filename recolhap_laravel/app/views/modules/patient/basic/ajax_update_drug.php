<?php 
include '../../DB/connect.php';

/*
*
* -----------------------------------------------------
* AJAX execution file:		ajax_update_drug.php
* js function name: 		update_in_line()
* js file:					clinic_eval.js
* variables come from: 		patient/basic/table_treatment.php
*/
$drug_treatment_id=$_POST['rowid'];
$drug_end=$_POST['col2val'];
$suspend_cause=$_POST['col1val'];
$table=$_POST['table'];

mysqli_query($con, "UPDATE $table SET 
drug_end = '$drug_end' , 
suspend_cause = '$suspend_cause'
WHERE drug_treatment_id ='$drug_treatment_id' "  );
?>

