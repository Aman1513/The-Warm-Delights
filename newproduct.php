<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Products</title>
	<link rel="stylesheet" type="text/css" href="CSS/newproducts.css">
</head>
<body>
<div class="box">
	<img src="CSS/img/add.png" class="avtar">
	<h1>Add Product</h1>
	<form action="addnew.php" method="post" enctype="multipart/form-data">
		<p>Product Name</p>
		<input type="text" name="t1" placeholder="Product's Name" required="1">
		<p>Price</p>
		<input type="number" name="t2" placeholder="Price" required="1">
		<p>Image of Product</p><br>
		<input type="file" name="pimage"/ required="1"><br>
		<input type="submit" name="s" value="Add">
	</form>
</div>
</body>
</html>