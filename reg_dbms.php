<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['Email'];
$food=$_POST['food'];
$p1=$_POST['Password'];
$p2=$_POST['cPassword'];
if(isset($_POST['submit']))
{
include('connect.php');
if($p1==$p2)
{
$qry="insert into bakery (FirstName, LastName, PhoneNumber, Email, Food, Password) values('$fname','$lname','$phone','$email','$food','$p1')";
if(mysqli_query($conn,$qry))
{
	session_start();
	$_SESSION['user']=$email;
	echo '<script>alert("Welcome to The Warm Delights. Sign Up Successful.")</script>';
	header("refresh:0; url=http://localhost/Bakery/index1.php");
}
else
{
	echo mysqli_error($conn);
	echo '<script>alert("Already Register. Please click on Login")</script>';
	header("refresh:0; url=http://localhost/Bakery/register.php");
}
}
else
{
	echo '<script>alert("Your Password and confirm is not same. Please check it.")</script>';
	header("refresh:0; url=http://localhost/Bakery/register.php");
}
mysqli_close($conn);
}
?>