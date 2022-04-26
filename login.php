<?php

ob_start();
session_start();
if(isset($_SESSION['username'])){
	header('location: main.html');
}

include_once("./php/config.php");

if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password = $_POST['password'];


    $result = mysqli_query($mysqli, "select 'username', 'password' from users
        where username='$username' and password='$password'");

   
    $user_matched = mysqli_num_rows($result);

  
    if ($user_matched > 0) {

        $_SESSION["username"] = $username;
        header("location: main.html");
    } else {
        echo "User username or password is not matched <br/><br/>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ACCOMMODATION SERVICE PROVIDER</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
	<!-- <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">

	 <!-- bootstrap core css -->
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	 <link rel="stylesheet" href="fonts/icomoon/style.css">
	 <link rel="stylesheet" href="css/magnific-popup.css">
	 <link rel="stylesheet" href="css/jquery-ui.css">
	 <link rel="stylesheet" href="css/owl.carousel.min.css">
	 <link rel="stylesheet" href="css/owl.theme.default.min.css">
	 <link rel="stylesheet" href="css/bootstrap-datepicker.css">
	 <link rel="stylesheet" href="css/mediaelementplayer.css">
	 <link rel="stylesheet" href="css/animate.css">
	 <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	 <link rel="stylesheet" href="css/fl-bigmug-line.css">
	   
	 
	   <link rel="stylesheet" href="css/aos.css">
   
	   <link rel="stylesheet" href="css/style2.css">
   
	 <!-- fonts style -->
	 <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
	 <!-- Custom styles for this template -->
	 <link href="css/style.css" rel="stylesheet" />
	 <link href="css/style2.css" rel="stylesheet" />
	 <!-- responsive style -->
	 <link href="css/responsive.css" rel="stylesheet" />
	 <link rel="stylesheet" href="css/main.css">
	   <script src="./js/jquery.min.js"></script>
	   <script src="./js/app.js"></script>
	 <!-- End of  Custom styles for this template -->
</head>
<body>
	<div class="hero_area">
		<!-- header section strats -->
		<header class="header_section">
		  <div class="container-fluid">
			<nav class="navbar navbar-expand-lg custom_nav-container">
			  <a class="navbar-brand" href="index.html">
				Accommodation Service Provider
			  </a>
			  <div class="navbar-collapse" id="">
				
	
				<div class="custom_menu-btn">
				  <button onclick="openNav()">
					<span class="s-1">
	
					</span>
					<span class="s-2">
	
					</span>
					<span class="s-3">
	
					</span>
				  </button>
				</div>
				<div id="myNav" class="overlay">
				  <div class="overlay-content">
					<a href="index.html">HOME</a>
					<a href="about.html">ABOUT</a>
					<a href="house.html">HOUSE</a>
					<a href="price.html">PRICING</a>
					<a href="contact.html">CONTACT US</a>
				  </div>
				</div>
			  </div>
			</nav>
		  </div>
		</header>
		<!-- end header section -->
		 <!-- slider section -->
		<section class="slider_section ">
		  <div class="container-fluid">
			<div class="row">
			  <div class="col-md-4 offset-md-1">
				<div class="detail-box">
				  <h1>
					<span> Modern</span> <br>
					Apartment <br>
					House
				  </h1>
				  <p>
					It is a long established fact that a reader will be distracted by the readable content of
				  </p>
				  <div class="btn-box">
					<a href="" class="">
					  Read More
					</a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
	  </div>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form  class=" text-center m-5" method = "post method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
    <footer class="static-bottom text-center py-3 mt-4 bg-primary text-light">
        Copyright&copy;Suleiman Ahmed ROBERT GORDON UNIVERSITY 2022
    </footer>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

        
    </body>
    </html>