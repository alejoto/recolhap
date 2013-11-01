<?php 
include '../DB/connect.php';
if (isset($_POST['usr'])) {
	$usr=$_POST['usr'];
	$result = mysqli_query($con,"SELECT * FROM users WHERE user_id='$usr' ");
	$row = mysqli_fetch_array($result);
	if ($row[0]=="") {
		echo "Usuario no existe, debe registrarse!";
	}
	else {

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= 'From: No reply<no_reply@healmydisease.com>' . "\r\n";
		mail($row['user_id'],'Password Recovery','Forgotten password is '.$row['pwd'],$headers);
		?>
			Se envi&oacute; clave a su email
		<?php
	}
}
?>