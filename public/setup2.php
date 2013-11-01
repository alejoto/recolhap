<?php
  $con = mysql_connect("localhost","root","root");
  mysql_select_db("health", $con);

  $info = "funcional_tiempo";

  function find_patients($year, $pat){
    $inc = 0;
    $sql    = "SELECT * FROM hap_follow_up";
    $result = mysql_query($sql);
    while( $row = mysql_fetch_array($result) ){

      $act_p = $row['eval_id'];

      if( !isset($pat[(string)$act_p]) ){
        $sql2 = "SELECT min(eval_date) FROM hap_follow_up WHERE eval_id='".$act_p."'";
        $result2 = mysql_query($sql2);
        $row1 = mysql_fetch_array($result2);
        $min_date = $row1[0];

        $min_date_arr = explode("-", $min_date );
        $act_date_arr = explode("-", $row['eval_date'] );
        $miliseconds_min = mktime(0,0,0,intval($min_date_arr[1]),intval($min_date_arr[2]),intval($min_date_arr[0]));
        $miliseconds_max = mktime(0,0,0,intval($act_date_arr[1]),intval($act_date_arr[2]),intval($act_date_arr[0]));
        $years_since_first_eval = floor( ($miliseconds_max - $miliseconds_min) / (60*60*24*365) );
        if($years_since_first_eval >= $year){
          $pat[(string)$row['eval_id']] = $inc;
          $inc++;
        }
      }
    }
    return $pat;
  }
  
  function find_month_since_first_eval($p, $eval_date){
    $sql = "SELECT min(eval_date) FROM hap_follow_up WHERE eval_id='".$p."'";
    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $min_date = $row[0];
    
    $min_date_arr = explode("-", $min_date );
    $act_date_arr = explode("-", $eval_date );
    $miliseconds_min = mktime(0,0,0,intval($min_date_arr[1]),intval($min_date_arr[2]),intval($min_date_arr[0]));
    $miliseconds_max = mktime(0,0,0,intval($act_date_arr[1]),intval($act_date_arr[2]),intval($act_date_arr[0]));
    $days_since_first_eval = abs( ($miliseconds_max - $miliseconds_min) / (60*60*24) );
    
    return floor($days_since_first_eval/30);
  }
  
  function fill_ap($ap){
    for( $i = 0; $i < count($ap); $i++ ){
      for( $j = 1; $j < 36; $j++ ){
        if( $ap[$i][$j] == "." ) $ap[$i][$j] = $ap[$i][$j-1];
      }
    }
    return $ap;
  }
  
  if($info == "funcional_tiempo"){
    // crea arreglo pacientes
    $pat = array();
    $pat = find_patients(1,$pat);
     
    // crea arreglo clases functionales asociadas a pacientes
    $ap = array_fill(0, count($pat), array());
    for( $i=0; $i<count($pat); $i++ ) $ap[$i] = array_fill(0, 36, ".");
    
    // llena el arreglo clases funcionales - ap
    $sql    = "SELECT * FROM hap_follow_up";
    $result = mysql_query($sql);
    while( $row = mysql_fetch_array($result) ){
      $act_p = $row['eval_id'];
      $eval_date = $row['eval_date'];
      if( isset($pat[(string)$act_p]) ){    
        $month = find_month_since_first_eval($act_p, $eval_date);
        //echo $act_p." ".$eval_date." ".$month."<br>";
        $ap[$pat[(string)$act_p]][$month] = $row['nyha_funct_class'];
        
      }
    }
    
    $ap = fill_ap($ap);
    
    /*
    for( $i = 0; $i < count($ap); $i++ ){
      for( $j = 0; $j < 36; $j++ ){
        echo $j.$ap[$i][$j]." ";
      }
      echo '<br>';
    }
    */

    $result = array_fill(0, 4, array());
    for( $i = 0; $i < 4; $i++ ) $result[$i] = array_fill(0, 36, 0);
    
    for( $i = 0; $i < 36; $i++ ){
      for( $j = 0; $j < count($ap); $j++ ){
        if($ap[$j][$i] == "i") $result[0][$i]++;
        if($ap[$j][$i] == "ii") $result[1][$i]++;
        if($ap[$j][$i] == "iii") $result[2][$i]++;
        if($ap[$j][$i] == "iv") $result[3][$i]++;
      }
    }

    $exit = false;
    //var_dump($ap);
    $result[0] = array_slice($result[0],0,12);
    $result[1] = array_slice($result[1],0,12);
    $result[2] = array_slice($result[2],0,12);
    $result[3] = array_slice($result[3],0,12);

    $serialized_result = implode(",",$result[0])."?".
                         implode(",",$result[1])."?".
                         implode(",",$result[2])."?".
                         implode(",",$result[3]);
    $serialized_result = str_replace(" ", "", $serialized_result);

    
  }
  
  mysql_close($con);
?>