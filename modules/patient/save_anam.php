<?php 
include '../DB/connect.php';
session_start();
$eval_id=$_SESSION['evaluation'];
$ptn=$_SESSION['hap_patient_id'];
$afroamerican=$_POST['afroamerican'];
$dxdate=$_POST['dxdate'];

//anamnesis data
$eval_date=$_POST['eval_date'];
$dyspnea=$_POST['dyspnea'];
$cough=$_POST['cough'];
$chestpain=$_POST['chestpain'];
$loweredema=$_POST['loweredema'];
$hemoptysis=$_POST['hemoptysis'];
$syncope=$_POST['syncope'];
$improved_symts=$_POST['improved_symts'];
$nyha_funct_class=$_POST['nyha_funct_class'];

//exf foc data
$pulse=$_POST['pulse'];
$breathing=$_POST['breathing'];
$sat_ox=$_POST['sat_ox'];
$pres_art_exfco=$_POST['pres_art_exfco'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$ing_yu=$_POST['ing_yu'];
$hepatomegaly=$_POST['hepatomegaly'];
$cyanosis=$_POST['cyanosis'];
$ef_edema=$_POST['ef_edema'];
$finger_clubbing=$_POST['finger_clubbing'];

if ($_POST['afroamerican']!=''&&$_POST['dxdate']!='') 
{ 
		mysqli_query($con,"INSERT INTO hap_first_eval (afroamerican,dxdate,eval_id) 
		values ('$afroamerican','$dxdate','$eval_id')");
}


mysqli_query($con,"INSERT INTO hap_follow_up (
eval_date
,dyspnea
,cough
,chestpain
,loweredema
,hemoptysis
,syncope
,improved_symts
,nyha_funct_class
,eval_id
,pulse
,breathing
,sat_ox
,pres_art_exfco
,weight
,height
,ing_yu
,cyanosis
,hepatomegaly
,ef_edema
,finger_clubbing
) values (
'$eval_date'
,'$dyspnea'
,'$cough'
,'$chestpain'
,'$loweredema'
,'$hemoptysis'
,'$syncope'
,'$improved_symts'
,'$nyha_funct_class'
,'$eval_id'
,'$pulse'
,'$breathing'
,'$sat_ox'
,'$pres_art_exfco'
,'$weight'
,'$height'
,'$ing_yu'
,'$cyanosis'
,'$hepatomegaly'
,'$ef_edema'
,'$finger_clubbing'
)
");

?>