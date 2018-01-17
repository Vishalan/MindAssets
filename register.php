<?php
$con=mysqli_connect("localhost","riidlorg_mind","mind100","riidlorg_mindassets");

$email=$_POST["username"];
$pass=$_POST["password"];
$cpass=$_POST["cpassword"];
$sql="insert into register_t(email_id, password) values('$email','$cpass')";

$r=mysqli_query($con, $sql);

?>

