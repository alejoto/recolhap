<?php 
session_start();
$usr=$_SESSION['hap_patient_id'];
$eval_id=$_SESSION['evaluation'];

$antiphs_syndr=$_POST['antiphs_syndr'];
$protr20210_mutation=$_POST['protr20210_mutation'];
$c_protein_resist=$_POST['c_protein_resist'];
$antitrbiii_deficiency=$_POST['antitrbiii_deficiency'];
$prot_s_deficiency=$_POST['prot_s_deficiency'];
$prot_c_deficiency=$_POST['prot_c_deficiency'];
$unspecific_tromboph=$_POST['unspecific_tromboph'];
$hyperhomocist=$_POST['hyperhomocist'];
$neoplasia=$_POST['neoplasia'];
$esplenectomy=$_POST['esplenectomy'];
$other_hyperclott_disord=$_POST['other_hyperclott_disord'];


include '../../DB/connect.php';


$sql    = "SELECT 
hap_hyperclotting.hyperclotting_id
,hap_hyperclotting.antiphs_syndr
,hap_hyperclotting.protr20210_mutation
,hap_hyperclotting.c_protein_resist
,hap_hyperclotting.antitrbiii_deficiency
,hap_hyperclotting.prot_s_deficiency
,hap_hyperclotting.prot_c_deficiency
,hap_hyperclotting.unspecific_tromboph
,hap_hyperclotting.hyperhomocist
,hap_hyperclotting.neoplasia
,hap_hyperclotting.esplenectomy
,hap_hyperclotting.other_hyperclott_disord
,hap_hyperclotting.eval_id as hyperclot_eval_id
,main_eval.eval_id
,main_eval.patient_id
,main_eval.digiter_id
,main_eval.hospital_id
,main_eval.t_st

 FROM hap_hyperclotting 
LEFT JOIN main_eval 
ON hap_hyperclotting.eval_id=main_eval.eval_id  
WHERE main_eval.patient_id='".$usr."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if ($row[0]=="") {
	$sql="INSERT INTO hap_hyperclotting (antiphs_syndr
,protr20210_mutation
,c_protein_resist
,antitrbiii_deficiency
,prot_s_deficiency
,prot_c_deficiency
,unspecific_tromboph
,hyperhomocist
,neoplasia
,esplenectomy
,other_hyperclott_disord
,eval_id)
 VALUES 
('$antiphs_syndr'
, '$protr20210_mutation'
, '$c_protein_resist'
, '$antitrbiii_deficiency'
, '$prot_s_deficiency'
, '$prot_c_deficiency'
, '$unspecific_tromboph'
, '$hyperhomocist'
, '$neoplasia'
, '$esplenectomy'
, '$other_hyperclott_disord'
, '$eval_id')
";
if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error()); } else echo "Datos guardados exitosamente!";
}
else {
	
	$hyperclot_eval_id= $row['hyperclot_eval_id'];
	//echo $row['antiphs_syndr'];
	if ($row['antiphs_syndr']=='true') $antiphs_syndr='true';
	if ($row['protr20210_mutation']=='true') $protr20210_mutation='true';
	if ($row['c_protein_resist']=='true') $c_protein_resist='true';
	if ($row['antitrbiii_deficiency']=='true') $antitrbiii_deficiency='true';
	if ($row['prot_s_deficiency']=='true') $prot_s_deficiency='true';
	if ($row['prot_c_deficiency']=='true') $prot_c_deficiency='true';
	if ($row['unspecific_tromboph']=='true') $unspecific_tromboph='true';
	if ($row['hyperhomocist']=='true') $hyperhomocist='true';
	if ($row['neoplasia']=='true') $neoplasia='true';
	if ($row['esplenectomy']=='true') $esplenectomy='true';
	$other_hyperclott_disord=$other_hyperclott_disord."<br/>".$row['other_hyperclott_disord'];

	$sql="UPDATE hap_hyperclotting 
    SET 
	antiphs_syndr= '$antiphs_syndr'
	,protr20210_mutation= '$protr20210_mutation'
	,c_protein_resist= '$c_protein_resist'
	,antitrbiii_deficiency= '$antitrbiii_deficiency'
	,prot_s_deficiency= '$prot_s_deficiency'
	,prot_c_deficiency= '$prot_c_deficiency'
	,unspecific_tromboph= '$unspecific_tromboph'
	,hyperhomocist= '$hyperhomocist'
	,neoplasia= '$neoplasia'
	,esplenectomy= '$esplenectomy'
	,other_hyperclott_disord= '$other_hyperclott_disord'
	WHERE eval_id='$hyperclot_eval_id'";
	if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error()); } else {echo "Datos guardados exitosamente!";}
}
?>
