<?php
session_start();
include '../DB/connect.php';
$usr  = htmlspecialchars($_POST['usr'],ENT_QUOTES);//catch user email
$pwd  = $_POST['pwd'];//catch password
$sql    = "SELECT * FROM users WHERE user_id='$usr' ";
$result = mysqli_query($con,$sql);
$row    = mysqli_fetch_array($result);
echo mysqli_error($con);
if ($row[0] ==""|| $row[0] ==null||$pwd!=$row['pwd']) 
    //conditions = table row no empty and table password must match with entered password
{
    echo "no";
} else {
    $_SESSION['username'] = $usr;//activate username for register navigation
    echo 1;
}

?>