<?php
session_start();
$userid=$_POST['userid'];
$password=$_POST['password'];
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
$q="select * from logintable where userid='$userid' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num!==1) {
header('Location:http://localhost/LOGIN/login.php');
}
else{
$_SESSION['userid']=$userid;
header('Location:http://localhost/LOGIN/home.php');
}
mysqli_close($con);
?>