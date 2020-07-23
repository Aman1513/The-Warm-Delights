<?php
$email=$_POST['Email'];
$p1=$_POST['Password'];
if(isset($_POST['submit']))
{
include('connect.php');
$qry1="select * from bakery where Email='$email'";
$res=mysqli_query($conn,$qry1);
if($b=mysqli_fetch_array($res))
{
	if($p1==$b[6])
	{
		session_start();
		$_SESSION['user']=$email;
		echo '<script>alert("Welcome to The Warm Delights. Login Successful.")</script>';
		header("refresh:0; url=http://localhost/Bakery/index1.php");
	}
	else
	{
		echo '<script>alert("Invalid Password")</script>';
		header("refresh:0; url=http://localhost/Bakery/Login.php");
	}
 }
 else
 {
 	echo '<script>alert("Invalid Email Id and Password. Please click on create new account.")</script>';
 	header("refresh:0; url=http://localhost/Bakery/Login.php");
 }
}
mysqli_close($conn);
?>