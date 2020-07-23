<?php
$e=$_POST['Email'];
$f=$_POST['food'];
$p=$_POST['p'];
if(isset($_POST['s']))
{
	include('connect.php');
	$qry="select * from bakery where Email='$e'";
	$res=mysqli_query($conn,$qry);
	if($b=mysqli_fetch_array($res))
	{
		if($f==$b[5])
		{
			$qry1="update bakery set Password='$p' where Email='$e'";
			if(mysqli_query($conn,$qry1))
			{
				echo '<script>alert("Password Updated")</script>';
				header("refresh:0; url=http://localhost/Bakery/Login.php");
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
		else
		{
			echo '<script>alert("Your favorite food name is not match.")</script>';
			header("refresh:0; url=http://localhost/Bakery/forpass.php");
		}
	}
	else
	{
		echo '<script>alert("Invalid Email Id.")</script>';
		header("refresh:0; url=http://localhost/Bakery/forpass.php");
	}
}
?>