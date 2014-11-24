<?php
  $titles = array(
                  // main_patient
                  'fecha ingreso paciente', 
                  'Nombres paciente', 
                  'Apellidos paciente', 
                  'Sexo', 
                  'Fecha nacimiento', 
                  'Pais nacimiento', 
                  'Ciudad nacimiento', 
                  'Departamento nacimiento', 
                  'email digitador',
                  'Cedula paciente', 
                
                  // hap_data_patient
                  'Fecha edicion paciente', 
                  'Celular pte', 
                  'Tel paciente', 
                  'EPS', 
                  'tipo vinculacion salud', 
                  'pais residencia', 
                  'ciudad residencia', 
                  'departamento residencia', 
                  'numero historia clinica', 
                  //'redundante',
                  
                  // hap_arterialgasses
                  'fecha examen gases arteriales', 
                  'FIO2 gases arteriales', 
                  'pH gases arteriales', 
                  'paCO2 gases arteriales',
                  'paO2 gases arteriales', 
                  'HCO3 gases arteriales', 
                  
                  
                  'fecha examen pruebas coagulacion', 
                  'TPT', 
                  'TP', 
                  'INR',
                  'fecha examen stress test', 
                  'pico max VO2', 
                  'P.A. durante stress test', 
                  'pulso durante stress test', 
                  'medicamento', 
                  'otros medicamentos', 
                  'dosis', 
                  'fecha inicio medicamento', 
                  'fecha suspension medicamento',
                  'causa suspension medicamento', 
                  'evento adverso', 
                  'fecha examen doppler miembros inferiores', 
                  'doppler extremidad inf derecha', 
                  'otros datos doppler extremidades inferiores', 
                  'fecha examen ecocardio',
                  'via ecocardiografia', 
                  'PA durante ecocardio', 
                  'dilatacion cavidades derechas por ecocardio', 
                  'disfuncion cardiaca derecha por ecocardio', 
                  'derrame pleural por ecocardio', 
                  'disfuncion cardiaca izquierda por ecocardio', 
                  'fraccion eyeccion por ecocardio', 'TAPSE ecocardio',
                  'defectos congenitos cardiacos ecocardio', 
                  'otros defectos congenitos ecocardio', 
                  'desviacion septum ecocardio', 
                  'fecha examen electroCG', 
                  'eje electroCG', 
                  'patron electroCG',
                  'frecuencia electroCG', 
                  'Tipo ritmo electroCG', 
                  'medico tratante', 
                  'raza afroamericanan',
                  'fecha de diagnostico de primera vez', 
                  'anos sintomatico', 
                  'fecha examen medico', 
                  'oxigeno domiciliario',
                  'nro horas oxigeno domiciliario', 
                  'disnea', 
                  'tos', 
                  'dolor toracico', 
                  'edema extremidades inferiores',
                  'hemoptisis', 
                  'sincope', 
                  'mejoria de sintomas', 
                  'embarazo', 
                  'peso evaluacion de seguimiento', 
                  'talla evaluacion de seguimiento', 
                  'clase funcional NYHA', 
                  'saturacion oxigeno evaluacion de seguimiento',
                  'pulso evaluacion de seguimiento', 
                  'presion arterial evaluacion de seguimiento',
                  'frecuencia respiratoria evaluacion de seguimiento', 
                  'soplo tricuspideo evaluacion de seguimiento',
                  'p2 mayor que a2 evaluacion de seguimiento', 
                  'cianosis evaluacion de seguimiento', 
                  'hepatomegalia evaluacion de seguimiento', 
                  'edema evaluacion de seguimiento',
                  'ing yugular evaluacion de seguimiento', 
                  'dedos palillo de tambor evaluacion de seguimiento',
                  'fecha examen gamagrafia VP', 
                  'TEP por gamagrafia pulm', 
                  'defectos encontrados en gamagrafia pulm',
                  'fecha examen hemoglobina', 
                  'hemoglobina mg/dl', 
                  'fecha examen pruebas tiroideas', 
                  'TSH', 
                  't4 total',
                  't4 libre', 
                  'fecha examen pruebas hepaticas', 
                  'albumina', 
                  'AST', 
                  'ALT', 
                  'FAL liver', 
                  'GGT', 
                  'bilirrubina T',
                  'bilirrubina dir', 
                  'fecha examen funcion renal', 
                  'creatinina', 
                  'BUN', 
                  'fecha examen caminata 6 mins',
                  'metros caminados', 
                  'FI02 prueba caminata', 
                  'SatO2 inicial caminata', 
                  'SatO2 final caminata', 
                  'sintomas durante caminata', 
                  'BORG caminata', 
                  'sincope durante caminata', 
                  'dolor toracico durante caminata',
                  'digitador', 
                  'hospital', 
                  'timestamp registro de datos');

    function info_patients(){
      include '../DB/connect.php';
      
      $ans = array();
      
      // $sql = mysqli_query($con,"SELECT * FROM main_patient");
      // echo mysqli_num_rows($result);     
      // $temp = array();
      // $ans = array();
      // 
      // while( $row = mysqli_fetch_array($sql) ){
      //   $patient = $row['patient_id'];
      //   
      //   array_push($temp, $row['timestamp'], $row['name'], $row['surn'], $row['gender'], $row['birthd'],
      //                     $row['countrybth'], $row['citybth'], $row['statebth'], $row['digiter_id'], $patient);
      // 
      //                  
      //   $sql2 = mysqli_query($con,"SELECT * FROM add_data_patient WHERE patient_id='$patient'");
      //   while( $row2 = mysqli_fetch_array($sql2) ){
      //     array_push($temp, $row2['timestamp'], $row2['mobile'], $row2['phone'], $row2['eps'], $row2['insurancetype'],
      //                       $row2['countryreside'], $row2['cityreside'], $row2['statereside'], $row2['clinrecordnum']);
      //   }
      //   
      //   $ans[] = $temp;
      //   $temp = array();
      // }

      // for( $i = 0; $i < count($ans[0]); $i++ ){
      //   echo $ans[0][$i]."<br>";
      // }
      
      // $sql = "SELECT *
      //   FROM main_patient as p
      //   INNER JOIN main_eval as s ON p.patient_id=s.patient_id
      //   INNER JOIN add_data_patient ON s.eval_id=add_data_patient.eval_id
      //   INNER JOIN hap_arterialgasses ON s.eval_id=hap_arterialgasses.eval_id
      //   INNER JOIN hap_coag ON s.eval_id=hap_coag.eval_id
      //   INNER JOIN hap_cp_stress_test ON s.eval_id=hap_cp_stress_test.eval_id
      //   INNER JOIN hap_drug_treatment ON s.eval_id=hap_drug_treatment.eval_id
      //   INNER JOIN hap_duplex_legs ON s.eval_id=hap_duplex_legs.eval_id
      //   INNER JOIN hap_ecocardio ON s.eval_id=hap_ecocardio.eval_id
      //   INNER JOIN hap_electrok ON s.eval_id=hap_electrok.eval_id
      //   INNER JOIN hap_first_eval ON s.eval_id=hap_first_eval.eval_id
      //   INNER JOIN hap_follow_up ON s.eval_id=hap_follow_up.eval_id
      //   INNER JOIN hap_gammagr ON s.eval_id=hap_gammagr.eval_id
      //   INNER JOIN hap_hb ON s.eval_id=hap_hb.eval_id
      //   INNER JOIN hap_hemo_thyro ON s.eval_id=hap_hemo_thyro.eval_id
      //   INNER JOIN hap_hepatic ON s.eval_id=hap_hepatic.eval_id
      //   INNER JOIN hap_renal ON s.eval_id=hap_renal.eval_id
      //   INNER JOIN hap_six_mins_walk ON s.eval_id=hap_six_mins_walk.eval_id";
      // $result = mysqli_query($con, $sql);
      // 
      // $row = mysqli_fetch_array($result);
      // var_dump($row);
      
      $sql = "SELECT * FROM main_patient as p INNER JOIN main_eval as s ON p.patient_id=s.patient_id";
      $result = mysqli_query($con,$sql);
      
      while( $row = mysqli_fetch_array($result) ){
        $eval = $row['eval_id'];

        /* ------------------------------------- main_patient ------------------------------------- */
        array_push($ans, $row['timestamp'], $row['name'], $row['surn'], $row['gender'], 
                         $row['birthd'], $row['countrybth'], $row['citybth'], $row['statebth'], 
                         $row['digiter_id'], $row['patient_id']);
        /* ---------------------------------------------------------------------------------------- */

        
        /* --------------------------------- hap_data_patient ------------------------------------- */
        $sql_patient = "SELECT * FROM add_data_patient WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['timestamp'], $data_patient['mobile'], 
                         $data_patient['phone'], $data_patient['eps'], 
                         $data_patient['insurancetype'], $data_patient['countryreside'], 
                         $data_patient['cityreside'], $data_patient['statereside'], 
                         $data_patient['clinrecordnum']);
        /* ---------------------------------------------------------------------------------------- */
        
        
        /* --------------------------------- hap_arterialgasses ----------------------------------- */
        $sql_patient = "SELECT * FROM hap_arterialgasses WHERE eval_id='$eval'";
        $data_patient = mysqli_fetch_array( mysqli_query($con,$sql_patient) );
        array_push($ans, $data_patient['bld_gass_date'], $data_patient['bld_gass_fio2'], 
                         $data_patient['bld_gass_ph'], $data_patient['bld_gass_paco2'], 
                         $data_patient['bld_gass_pao2'], $data_patient['bld_gass_hco3']);
        /* ---------------------------------------------------------------------------------------- */


        /* ------------------------------------- hap_coag ----------------------------------------- */
        /* ---------------------------------------------------------------------------------------- */

        break;
      }

      for( $i = 0; $i < count($ans); $i++ ){
        echo $ans[$i]."<br>";
      }
    
    }
?>