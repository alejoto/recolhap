<?
if (!isset($_GET['activate'])) {header("location:../../");}
else {
	include '../DB/connect.php';
	$activate=$_GET['activate'];
	$sql    = "SELECT * FROM users WHERE user_id='".$activate."'";
	$result = mysqli_query($con,$sql);
	$row    = mysqli_fetch_array($result);
	if ($row[0] !="" || $row[0] !=null) {
		$valid_email=$row['status'];
		mysqli_query($con,"UPDATE users SET user_id='$valid_email', status='0' 
		WHERE user_id='$activate'");
		session_start();
		$_SESSION['username'] = $valid_email;
		header("location:../myaccount/myaccount.php?page=patients");
	}
	else {header("location:../../");}
}
?>