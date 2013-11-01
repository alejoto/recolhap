<?php
session_start();
include '../DB/connect.php';
$usr  = htmlspecialchars($_POST['usr'],ENT_QUOTES);
$pwd2   = $_POST['pwd'];
$pwd    = $pwd2;
$sql    = "SELECT * FROM users WHERE user_id='$usr' ";
$result = mysqli_query($con,$sql);
$row    = mysqli_fetch_array($result);
echo mysqli_error($con);
if ($row[0] ==""|| $row[0] ==null||$pwd!=$row['pwd']) {
    echo "no";
} else {
    $_SESSION['username'] = $usr;
    echo 1;
}

?>