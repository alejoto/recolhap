<?php
  session_start();

  include '../DB/connect.php';

  $mail  = $_POST['mail'];
  $pwd1  = $_POST['pwd1'];
  $pwd2  = $_POST['pwd2'];

  $sql    = "SELECT * FROM users WHERE user_id='".$mail."'";
  $result = mysqli_query($con,$sql);
  $row    = mysqli_fetch_array($result);

  $sql2    = "SELECT * FROM users WHERE status='".$mail."'";
  $result2 = mysqli_query($con,$sql2);
  $row2   = mysqli_fetch_array($result2);

  if ($row2[0] !="" || $row2[0] !=null) {
    echo "mmm";
  }

  else if ( $row[0] !="" || $row[0] !=null  ) {
    echo "no";
  } else {
    if( $pwd1 == $pwd2 && $pwd1 != "" ){
      echo "yes";
      //$pwd1 = md5($pwd1);
      $tms=time().$mail;
      $cont="<a href='http://www.recolhap.com//modules/register/confirm_register.php?activate=".$tms."'>Acceda a este link para activar su usuario</a>";
			
      
      /*send mail with mime specs*/
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
      $headers .= 'From: no reply<no_reply@healmydisease.com>' . "\r\n";
      $subject="Activar usuario";
      $content='<html><head><meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type"><title></title></head><body moz_template="id1" bgcolor="#ffffff" text="#000000">';
      $content .='<font face="Tahoma">';
      /*Define content*/
      $content .=$cont;
      /*Define content*/
			
      $content .='</font>';
      $content .='<br/><br/><br/><p><font face="verdana, arial, helvetica, sans-serif"><b>J. ALEJANDRO TORO D.</b></font></p>';
      $content .='<font face="verdana, arial, helvetica, sans-serif" size="2"><p>Project manager HMD&#174</p>';
      $content .='<p>HMD Web-based tools for clinical researches</p>';
      $content .='<p>www.healmydisease.com</p>';
      $content .='<p>Mobile (57)3006035703</p>';
      $content .='<p>Email: <span style="color: #0002a5; ">';
      $content .='<b><a href="mailto:projectmanager@healmydisease.com">projectmanager@healmydisease.com</a></b></span></p></font>';
      $content .='</body></html>';
      mysqli_query($con,"INSERT INTO users (user_id, pwd, rol, status) VALUES ('".$tms."', '".$pwd1."','NN','$mail')");
      mail($mail,$subject,$content,$headers);
    }
    else
    {
      echo 'no';
    }
  }

  mysqli_close($con);

?>