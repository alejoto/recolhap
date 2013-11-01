<?php
  session_start();
  include '../DB/connect.php';
  $doc  = $_POST['doc'];
  $sql    = "SELECT * FROM main_patient WHERE patient_id='".$doc."'";
  $result = mysqli_query($con,$sql);
  $row    = mysqli_fetch_array($result);
  
  if ($row[0] !="" || $row[0] !=null){ 
    ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="row alert alert-success">
      <br/>
      <div class="span3">
        <?php 
        if ($row['gender']=='male') {
          ?>
          <img src="../../assets/images/male.png"/>
          <?php
        }
        else if ($row['gender']=='female') {
          ?>
          <img src="../../assets/images/female.png"/>
          <?php
        }
        ?>
      </div>
      <div class="span8">
        <div class="row">
          <div class="offset1 span10">
            <h4>
              <?php echo $row['name'].'<br/>'.$row['surn']; ?>
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="offset1 span1">
          <?php echo $row['patient_id'];?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset1 span11">
          <hr/>
        </div>
      </div>
      <div class="row">
        <div class="offset1 span6">
          Fecha nto <?php echo $row['birthd'];?> 
        </div>
        <div class=" span4">
          G&eacute;nero: <?php 
          if ($row['gender']=="male") {echo "hombre";}
            else if ($row['gender']=="female") {echo "mujer";}
          ?>
        </div>
      </div>
      <div class="row">
        <div class="offset1 span5">
          Nacionalidad <br/>
          <b><?php echo $row['countrybth'];?></b>
          
        </div>
        <div class="offset1 span5">
          Ciudad origen <br/>
          <b><?php echo $row['citybth'];?> </b>
          
        </div>
      </div>
    </div>
    <!--
    * button name:          none
    * Triggers:             Link to
    * Brieff description:   Starts new eval. First step is create right catheter info.
    * js associated file:   None
    * php AJAX:             Href: start_eval_id.php
    -->
    <a style="margin-left: 10px;" href="start_eval_id.php" role="button" class="btn btn-success span11">
      Ingresar datos del paciente
    </a>
    <?php
    $patient = "";
    for($i=0;$i<10; ++$i){
      if($i != 1){
        $patient .= $row[$i];
        if( $i<9 ) $patient .= "?";
      }
    }
    $_SESSION['hap_patient_id']=$doc;
    $_SESSION['patient'] = $patient;
  }else echo 'no';
  mysqli_close($con);
?>