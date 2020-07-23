<?php
$server='localhost';
$user='root';
$pws='';
$dbname='bakery';
$conn=mysqli_connect($server,$user,$pws,$dbname);
if(!$conn)
{
	die("it is not connected".mysqli_error());
}
?>