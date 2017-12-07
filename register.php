<?php
session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$userid=$_POST['userid'];
$password=$_POST['password'];
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'login');
$u="select * from logintable where userid='$userid' || password='$password'";
$result=mysqli_query($con,$u);
$num=mysqli_num_rows($result);
if ($num==1) {
	header('Location:http://localhost/LOGIN/login.php');
}
else{
$q="insert into logintable (firstname,lastname,userid,password)
 values('$firstname','$lastname','$userid','$password')";
mysqli_query($con,$q);
$_SESSION['userid']=$userid;
header('Location:http://localhost/LOGIN/home.php');
}
mysqli_close($con);
?>