<?php
$t=$_POST['t1'];
$p=$_POST['t2'];
$image_name=$_FILES['pimage']['name'];
$image_size=$_FILES['pimage']['size'];
$image_tmp=$_FILES['pimage']['tmp_name'];
$image_type=$_FILES['pimage']['type'];
$image_ext=strtolower(end(explode('.', $image_name)));
$image_store="CSS/img2/".$image_name;
$allowed_extension=array("jpeg","jpg","png");
if(isset($_POST['s']))
{
if(in_array($image_ext, $allowed_extension))
{
move_uploaded_file($image_tmp, $image_store);
include("pconnect.php");
$qry="insert into products(pname,price,image) values('$t','$p','$image_store')";
if(mysqli_query($conn,$qry))
{
	echo '<script>alert("Your Product added successfully.You can see it now.")</script>';
	header("refresh:0; url=http://localhost/Bakery/Admin.php");
}
else
{
	echo "not inserted".mysqli_error($conn);
}
}
else{
	echo '<script>alert("only .jpg or .jpeg or .png are allowed.")</script>';
	header("refresh:0; url=http://localhost/Bakery/newproduct.php");
}
mysqli_close($conn);
}
?>