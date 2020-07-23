<?php 
$server='localhost';
$user='root';
$pws='';
$conn=mysqli_connect($server,$user,$pws);
if(!$conn)
{
	die("it is not connected".mysqli_error());
}
echo "successful created";
$qry="create database bakery";
if(mysqli_query($conn,$qry))
{
	echo "<br>"."database created successfully";
}
else
{
	echo "not connected".mysqli_error($conn);
}
mysqli_close($conn);
?>