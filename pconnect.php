<?php
$server='localhost';
$user='root';
$pws='';
$dbname='product';
$conn=mysqli_connect($server,$user,$pws,$dbname);
if(!$conn)
{
	die("it is not connected".mysqli_error());
}
?>