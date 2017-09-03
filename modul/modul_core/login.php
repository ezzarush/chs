<?php
include('../../config/serverconfig.php');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Signin Form </title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Branded Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="<?=$app_path;?>assets/css/style2.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="<?=$app_path;?>assets/css/font-awesome2.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

<!-- //online-fonts -->

</head>
<body>
<div class="w3-agile-banner">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>Customer <span>Handling</span> System</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Signin Now</h2>
			</div>
			<div class="w3-head-continue">
						
			<div class="sub-main-w3">	
				<form action="<?=$app_path;?>modul/modul_core/login_proses.php" method="post">
					<input placeholder="Username" name="username" type="text" required="">
					<input  placeholder="Password" name="password" type="password" required="">
					<div class="rem-w3">
						<span class="check-w3"><input type="checkbox" />Remember Me</span>
						<a class="w3-pass" href="#">Forgot Password?</a>
						<div class="clear"></div>
					</div>
					
					<input type="submit" name ="login" value="Login" >
			</div>
			</form>
			</div>
						
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2017 All rights reserved </p>
		</div>
		<!--//footer-->
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="<?=$app_path;?>assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
</body>
</html>