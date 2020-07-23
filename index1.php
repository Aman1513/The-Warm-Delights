<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html{
	font-size: 10px;
	font-family: "Robot Cn", sans-serif;
}

a, a:hover, a:visited, a:active, a:link{
	text-decoration: none;
	color: #eee;
}

body{
	width: 100%;
	height: 100vh;
	background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(CSS/img/back.jpg) center no-repeat;
	background-size: 100% 100%;
}

.contain{
	max-width: 120rem;
	width: 90%;
	margin: 0 auto;
}

nav{
	padding-top: 3rem;
	display: flex;
	justify-content: space-between;
	align-items: center;
	text-transform: uppercase;
	font-size: 1.6rem;
}

.brand{
	font-size: 3rem;
	font-weight: 300;
}

.brand span{
	color: crimson;
}

nav ul{
	display: flex;
}

nav ul li{
	list-style: none;
}

nav ul li a{
	padding: 1rem 0;
	margin: 0 3rem;
	position: relative;
	letter-spacing: 2px;
}

nav ul li a:last-child{
	margin-right: 0;
}

nav ul li a::before,
nav ul li a::after{
	content: '';
	position: absolute;
	width: 100%;
	height: 2px;
	background-color: crimson;
	left: 0;
	transform: scaleX(0);
	transition: all .5s;
}

nav ul li a::before{
	top: 0;
	transform-origin: left;
}

nav ul li a::after{
	bottom: 0;
	transform-origin: right;
}

nav ul li a:hover::before,
nav ul li a:hover::after{
	transform: scaleX(1);
}

.main_body{
	min-height: 100%;
}
.main_body h1{
	text-align: center;
	color: white;
	font-size: 7rem;
	margin-top: 8vh;
}

.main_body h1 span{
	color: white;
	animation: moon 3s infinite;
}
@keyframes moon{
		30% {color: crimson;}
	}

.main_body p{
	text-align: center;
	color: white;
	font-size: 2rem;
}
p{
	color: #999;
	line-height: 25px;
}
h2,h3{
	color: #fff;
}
h2,h3{
	font-size: 25px;
}
.footer-top{
	background: #111;
	padding: 80px 0;
}
.segment-one h3{
	font-family: Courgette;
	color: #fff;
	letter-spacing: 3px;
	margin: 10px 0;
	text-transform: uppercase;
}
.segment-one h3:before{
	content: '|';
	color: #c65039;
	padding-right: 10px;
}
.segment-two h2{
	color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}
.segment-two h2:before{
	content: '|';
	color: #c65039;
	padding-right: 10px;
}
.segment-two ul{
	margin: 0;
	padding: 0;
	list-style: none;
}
.segment-two ul li{
	border-bottom: 1px solid rgba(255,255,255,0.3);
	line-height: 35px; 
}
.segment-two ul li a{
	color: #999;
	text-decoration: none;
}
.segment-three h2{
	color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}
.segment-three h2:before{
	content: '|';
	color: #c65039;
	padding-right: 10px;
}
.segment-three a{
	background: #494848;
	width: 40px;
	height: 40px;
	display: inline-block;
	border-radius: 50%;
}
.segment-three a i{
	font-size: 20px;
	color: #fff;
	padding: 10px 12px;
}
.segment-four h2{
	color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}
.segment-four h2:before{
	content: '|';
	color: #c65039;
	padding-right: 10px;
}
.segment-four form input[type=submit]{
	background: #c65039;
	border: none;
	padding: 3px 15px;
	margin-left: -5px;
	color: #fff;
	text-transform: uppercase; 
}
.footer-bottom-text{
	text-align: center;
	background: #000;
	line-height: 65px;
}
@media only screen and (min-width: 768px) and (max-width: 991px){
	.md-mb-30{
		margin-bottom: 30px;

	}
} 
@media only screen and (max-width: 767px){
	.sm-mb-30{
		margin-bottom: 30px;
	}
	.footer-top{
		padding: 50px 0;
	}
}
</style>
</head>
<body>
<header>
	<div class="contain">
		<nav>
			<h1 class="brand">
				<a href="index1.php"><span>B</span>AKER</a>
			</h1>
			<ul>
				<li><a href="index1.php">Home</a></li>
				<li><a href="Product1.php">Products</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">About</a></li>
				<li><a href="Logout.php">Logout</a></li>
				<li style="color:white; margin-left: 1rem; text-transform: none;">Hi...<?php echo $_SESSION['user'];?></li>
			</ul>
		</nav>
	</div>
</header>
<!--Main_Body-->
<div class="main_body">
	<h1>The Warm <span>Delights</span></h1>
	<p>Great Taste In Every Bite.</p>
</div>
<!--footer-->
<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-mid-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
					<h3>The Warm Delights</h3>
					<p>This is your Bakery</p>
				</div>
				<div class="col-mid-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
					<h2>useful link</h2>
					<ul>
						<li><a href="#">Event</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Hosting</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>
				<div class="col-mid-3 col-sm-6 col-xs-12 segment-three sm-mb-30">
					<h2>Follow Us</h2>
					<p>For get the latest update please follow us on our social media platform</p>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
				<div class="col-mid-3 col-sm-6 col-xs-12 segment-four sm-mb-30">
					<h2>Email id</h2>
					<p>Please enter your email id</p>
					<form>
						<input type="email" name="email">
						<input type="submit" name="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
	<p class="footer-bottom-text">All Right reserved by &Copy.Publisher</p>
</footer>
</body>
</html>