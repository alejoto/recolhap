<?php
// connect to the MySQL server

//$con = mysqli_connect("localhost","root","root");
//$con = mysqli_connect("localhost","healmy5_root","laravel","healmy5_health");
$con = mysqli_connect("localhost","healmy5_root","laravel","healmy5_health");
  
  if (mysqli_connect_errno($con))
  {
  	echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
  
  $sql2="CREATE TABLE  IF NOT EXISTS hap_reuma_ana (
			ana_id				INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,ana_date			DATE
			,ana_result		VARCHAR (150)
			,eval_id 			VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   	
   $sql2="CREATE TABLE  IF NOT EXISTS hap_reuma_spana (
			spana_id				INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,spana_date			DATE
			,spana_ctmere		VARCHAR (150)
   		,spana_anti_rna VARCHAR (150)
   		,spana_anti_dna VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_reuma_enas (
			enas_id					INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,enas_date			DATE
			,enas_anti_ro		VARCHAR (150)
   		,enas_anti_la		VARCHAR (150)
   		,enas_anti_smith VARCHAR (150)
   		,enas_anti_rnp	VARCHAR (150)
   		,enas_antiRNP70	VARCHAR (150)
   		,enas_anti_u3		VARCHAR (150)
   		,enas_antijo		VARCHAR (150)
   		,enas_anti_scl	VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_reuma_antilip (
			antilip_id			INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,antilip_date		DATE
			,antilip_acl_g	VARCHAR (150)
   		,antilip_acl_m	VARCHAR (150)
   		,antilip_a_coag_lup VARCHAR (150)
   		,antilip_anti_b2gp VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
  
   $sql2="CREATE TABLE  IF NOT EXISTS hap_reuma_anca (
			anca_id					INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,anca_date			DATE
			,anca_c_anca		VARCHAR (150)
   		,anca_p_anca		VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_reuma_citrul (
			citrul_id				INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,citrul_date		DATE
			,citrul_a_citrul	VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_hemo_thyro (
			thyro_id				INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,thyro_date			DATE
			,thyro_tsh			VARCHAR (150)
   		,thyro_t_4_total VARCHAR (150)
   		,thyro_t_4_free VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_hemo_dim (
			dim_id					INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,dim_date				DATE
			,dim_d_dimer_value VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_hemo_tropo (
			tropo_id				INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,tropo_date			DATE
			,tropo_trop_result VARCHAR (150)
			,eval_id 				VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_hemo_pept (
			petp_id					INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,pept_date			DATE
			,pept_pep_natr_value VARCHAR (150)
			,pept_pro_pep_natr_value VARCHAR (50)
   		,eval_id				VARCHAR(50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
    
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_surgical (
			surgical_id			INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
			,surgical_date	DATE
			,surgical_type  VARCHAR (150)
			,surgical_tendt_date DATE
   		,surgical_atr_date DATE
   		,eval_id				VARCHAR(50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));


   $sql2="CREATE TABLE  IF NOT EXISTS hap_coag (
      id INT (150) PRIMARY KEY NOT NULL AUTO_INCREMENT
      ,coag_date  DATE
      ,hep_tpt  VARCHAR (5)
      ,hep_tp VARCHAR (5)
      ,hep_inr VARCHAR (5)
      ,eval_id  VARCHAR(50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   
  $sql=mysqli_query($con,"SELECT status FROM users");
  if (!$sql){ mysqli_query($con,"ALTER TABLE users ADD status VARCHAR(60) AFTER rol");}

	$sql=mysqli_query($con,"SELECT improved_symts FROM hap_follow_up");
	if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD improved_symts VARCHAR(60) AFTER syncope");}

  $sql=mysqli_query($con,"SELECT pres_art_exfco FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD pres_art_exfco VARCHAR(60) AFTER pulse");}

  $sql=mysqli_query($con,"SELECT ing_yu FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD ing_yu VARCHAR(60) AFTER cyanosis");}

  $sql=mysqli_query($con,"SELECT ef_edema FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD ef_edema VARCHAR(60) AFTER cyanosis");}

  $sql=mysqli_query($con,"SELECT hepatomegaly FROM hap_follow_up");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_follow_up ADD hepatomegaly VARCHAR(60) AFTER cyanosis");}

  $sql=mysqli_query($con,"SELECT cardiac_index FROM hap_right_cathet");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_right_cathet ADD cardiac_index VARCHAR(60) AFTER cardiac_outp");}

  $sql=mysqli_query($con,"SELECT rt_ventr_oxim FROM hap_right_cathet");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_right_cathet ADD rt_ventr_oxim VARCHAR(60) AFTER rt_atr_oxim");}

  $sql=mysqli_query($con,"SELECT pulm_artery FROM hap_right_cathet");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_right_cathet ADD pulm_artery VARCHAR(60) AFTER rt_ventr_oxim");}

  $sql=mysqli_query($con,"SELECT legsdoppler_result_left FROM hap_duplex_legs");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_duplex_legs ADD legsdoppler_result_left VARCHAR(60) AFTER legsdoppler_date");}

  $sql=mysqli_query($con,"SELECT legsdoppler_result_right FROM hap_duplex_legs");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_duplex_legs ADD legsdoppler_result_right VARCHAR(60) AFTER legsdoppler_result_left");}

  $sql=mysqli_query($con,"SELECT post_cardiac_index FROM hap_vasoreact_test");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test ADD post_cardiac_index VARCHAR(60) AFTER post_cardiac_outp");}

  $sql=mysqli_query($con,"SELECT post_rt_ventr_oxim FROM hap_vasoreact_test");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test ADD post_rt_ventr_oxim VARCHAR(60) AFTER post_cardiac_index");}

  $sql=mysqli_query($con,"SELECT post_pulm_artery FROM hap_vasoreact_test");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test ADD post_pulm_artery VARCHAR(60) AFTER post_rt_ventr_oxim");}

  $sql=mysqli_query($con,"SELECT patient_id FROM add_data_patient");
  if (!$sql){ mysqli_query($con,"ALTER TABLE add_data_patient ADD patient_id VARCHAR(60) AFTER eval_id");}

  $sql=mysqli_query($con,"SELECT ivt_country FROM main_investigator");
  if (!$sql){ mysqli_query($con,"ALTER TABLE main_investigator ADD ivt_country VARCHAR(60) AFTER ivt_city");}

  $sql=mysqli_query($con,"SELECT esplenectomy FROM hap_hyperclotting");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_hyperclotting ADD esplenectomy VARCHAR(60) AFTER neoplasia");}

  $sql=mysqli_query($con,"SELECT doppl_cong_defects_otros FROM hap_ecocardio");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_ecocardio ADD doppl_cong_defects_otros VARCHAR(150) AFTER doppl_cong_defects  ");}

  $sql=mysqli_query($con,"SELECT mri_other_defects FROM hap_mri");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_mri ADD mri_other_defects VARCHAR(150) AFTER mri_defects  ");}

  $sql=mysqli_query($con,"SELECT artergph_location FROM hap_pulm_arteriography");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_pulm_arteriography ADD artergph_location VARCHAR(150) AFTER artergph_TEP  ");}

  $sql=mysqli_query($con,"SELECT post_cvf_lt FROM hap_spirometry");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_spirometry ADD post_cvf_lt VARCHAR(150) AFTER bronchodil_changes  ");}

  $sql=mysqli_query($con,"SELECT post_vef1_lt FROM hap_spirometry");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_spirometry ADD post_vef1_lt VARCHAR(150) AFTER post_cvf_lt  ");}

  $sql=mysqli_query($con,"SELECT post_vef1_cvf FROM hap_spirometry");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_spirometry ADD post_vef1_cvf VARCHAR(150) AFTER post_vef1_lt  ");}

  $sql=mysqli_query($con,"SELECT delta_abs_vef FROM hap_spirometry");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_spirometry ADD delta_abs_vef VARCHAR(150) AFTER post_vef1_cvf  ");}

  $sql=mysqli_query($con,"SELECT delta_vef1 FROM hap_spirometry");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_spirometry ADD delta_vef1 VARCHAR(150) AFTER delta_abs_vef  ");}

  $sql=mysqli_query($con,"SELECT borg FROM hap_six_mins_walk");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_six_mins_walk ADD borg VARCHAR(150) AFTER walk_symptoms  ");}

  $sql=mysqli_query($con,"SELECT walk_syncope FROM hap_six_mins_walk");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_six_mins_walk ADD walk_syncope VARCHAR(150) AFTER borg  ");}

  $sql=mysqli_query($con,"SELECT walk_toracic FROM hap_six_mins_walk");
  if (!$sql){ mysqli_query($con,"ALTER TABLE hap_six_mins_walk ADD walk_toracic VARCHAR(150) AFTER walk_syncope  ");}

  $sql=mysqli_query($con,"SELECT ivt_doc FROM main_investigator");
  if (!$sql){ mysqli_query($con,"ALTER TABLE main_investigator ADD ivt_doc VARCHAR(60) AFTER ivt_surname");}


 
  $sql=mysqli_query($con,"SELECT post_its_right FROM hap_vasoreact_test");
  if ($sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test DROP post_its_right");}

  $sql=mysqli_query($con,"SELECT post_its_left FROM hap_vasoreact_test");
  if ($sql){ mysqli_query($con,"ALTER TABLE hap_vasoreact_test DROP post_its_left");}

  $sql=mysqli_query($con,"SELECT hep_tpt FROM hap_hepatic");
  if ($sql){ mysqli_query($con,"ALTER TABLE hap_hepatic DROP hep_tpt");}
  
  $sql=mysqli_query($con,"SELECT hep_tp FROM hap_hepatic");
  if ($sql){ mysqli_query($con,"ALTER TABLE hap_hepatic DROP hep_tp");}
 
  $sql=mysqli_query($con,"SELECT hep_inr FROM hap_hepatic");
  if ($sql){ mysqli_query($con,"ALTER TABLE hap_hepatic DROP hep_inr");}
  
  ////////////////////////REUMA///////////////////////
  $sql=mysqli_query($con,"SELECT reuma_ana FROM hap_reuma");
	if ($sql){ mysqli_query($con,"ALTER TABLE hap_reuma DROP reuma_ana, DROP anti_ro, DROP anti_la, DROP anti_smt, DROP anti_rnp, DROP anti_u1rnp, DROP anti_u3rnp, DROP anti_jo, DROP rna_pol_3, DROP topiso_1, DROP centrom, DROP anti_slc, DROP anti_th_t0, DROP ss_dna, DROP ds_dna, DROP c_anca, DROP p_anca, DROP a_cardiolip_g, DROP a_cardiolip_m, DROP anticoag_lup, DROP a_2_cpl");}
  
	$sql=mysqli_query($con,"SELECT outcome_dyspn FROM hap_outcome");
	if ($sql){ mysqli_query($con,"ALTER TABLE hap_outcome DROP outcome_dyspn, DROP outcome_epid, DROP endart_failure, DROP lung_transplant, DROP dead_place");}
	
	//esplenectomy
?>
