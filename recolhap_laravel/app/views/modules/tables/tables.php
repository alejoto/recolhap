<?php
ob_start();
session_start();

$page = $_POST['file'];


 if($page == "t_patient" ) include '../tables/patient.php';
  else if($page == "t_arterialgasses" ) include '../tables/arterialgasses.php';
  else if($page == "t_cp_stress_test" ) include '../tables/cp_stress_test.php';
  else if($page == "t_dimer_trop" ) include '../tables/dimer_trop.php';
  else if($page == "t_drug_treatment" ) include '../tables/drug_treatment.php';
  else if($page == "t_duplex_legs" ) include '../tables/duplex_legs.php';
  else if($page == "t_ecocardio" ) include '../tables/ecocardio.php';
  else if($page == "t_electrok" ) include '../tables/electrok.php';
  else if($page == "t_first_eval" ) include '../tables/first_eval.php';    
  else if($page == "t_follow_up" ) include '../tables/follow_up.php';
  else if($page == "t_gammagr" ) include '../tables/gammagr.php';
  else if($page == "t_hb" ) include '../tables/hb.php';
  else if($page == "t_hemo_dim" ) include '../tables/hemo_dim.php';
  else if($page == "t_hemo_pept" ) include '../tables/hemo_pept.php';
  else if($page == "t_hemo_thyro" ) include '../tables/hemo_thyro.php';
  else if($page == "t_hemo_tropo" ) include '../tables/hemo_tropo.php';
  else if($page == "t_hepatic" ) include '../tables/hepatic.php';
  else if($page == "t_hyperclotting" ) include '../tables/hyperclotting.php';
  else if($page == "t_mri" ) include '../tables/mri.php';
  else if($page == "t_outcome" ) include '../tables/outcome.php';
  else if($page == "t_pep_natr" ) include '../tables/pep_natr.php';
  else if($page == "t_pulm_arteriography" ) include '../tables/pulm_arteriography.php';
  else if($page == "t_renal" ) include '../tables/renal.php';
  else if($page == "t_reuma" ) include '../tables/reuma.php';    
  else if($page == "t_reuma_ana" ) include '../tables/reuma_ana.php';
  else if($page == "t_reuma_anca" ) include '../tables/reuma_anca.php';
  else if($page == "t_reuma_antilip" ) include '../tables/reuma_antilip.php';
  else if($page == "t_reuma_citrul" ) include '../tables/reuma_citrul.php';
  else if($page == "t_reuma_enas" ) include '../tables/reuma_enas.php';
  else if($page == "t_reuma_spana" ) include '../tables/reuma_spana.php';    
  else if($page == "t_right_cathet" ) include '../tables/right_cathet.php';
  else if($page == "t_six_mins_walk" ) include '../tables/six_mins_walk.php';
  else if($page == "t_spirometry" ) include '../tables/spirometry.php';
  else if($page == "t_surgical" ) include '../tables/surgical.php';
  else if($page == "t_tc_angio" ) include '../tables/tc_angio.php';
  else if($page == "t_vasoreact_test" ) include '../tables/vasoreact_test.php';
  else if($page == "t_vih" ) include '../tables/vih.php';
  else if($page == "t_x_ray" ) include '../tables/x_ray.php';