<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>Carbon Footprint Calculator</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<style>
		.carbon-bg
		 {
  			height: 320px;
  			background-size: cover;
			background-position: center;
			border-radius: 5px;
			background-color: #ddd;
		}
	</style>

</head>

<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="shop.php">Shop</a>
								<li><a href="order.php">My orders</a></li>
								<li  class="current-list-item"><a href="">Functionalities</a>
									<ul class="sub-menu">
								<li><a href="education.php">Educational dashboard</a></li>
								<li><a href="noticeboard.php">Event Noticeboard</a></li>
								<li><a href="influencer.php">Influencer program</a></li>
								<li><a href="calculator.php">Carbon Footprint Calculator</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="login.php"><i class="fas fa-user-circle"> </i> <?php if(isset($_COOKIE['username'])){?>
										<?=ucfirst($_COOKIE['username']);}?></a>
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Calculate - Track - Reduce</p>
						<h1>Carbon Footprint Calculator</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    

	<!-- Calculator integration -->
	<iframe scrolling="no" style="height: 730px; width: 100%;" src="https://sustainabletravel.org/wp-content/plugins/sti_client/src/shortcode/shortcode.php?api_key=STIKEY_660d1a606f4b4654369827&primary_color=%23008370&secondary_color=%23f7961f&light_primary_color=%2366e9d6&sort_order=Flight%2CCar%2CBoat"></iframe>	
	<!-- Calculator integration -->

	<!-- why use this -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Why<span class="orange-text">UseOur</span>Calculator</h3>
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg carbon-bg-1"></div>
						<h4>Calculate<span>By calculating your carbon footprint, you gain awareness of your impact on the environment. This knowledge is crucial because it helps you understand which aspects of your lifestyle or business operations contribute most significantly to carbon emissions. Identifying these sources of emissions is the first step towards reducing them effectively.</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg carbon-bg-2"></div>
						<h4>Track<span>Tracking enables you to monitor progress toward reducing emissions and identify areas where improvements can be made. Regularly monitoring your carbon footprint allows you to set achievable goals and benchmarks for emission reduction efforts. By establishing a baseline and tracking changes, you can evaluate the effectiveness of various strategies and interventions aimed at mitigating your environmental impact. </span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg carbon-bg-3"></div>
						<h4>Reduce<span>he ultimate goal of using a carbon footprint calculator is to facilitate emission reduction. Armed with data on your carbon footprint and insights gained from tracking, you can implement targeted measures to minimize emissions.</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- why use this -->



	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Welcome to ShopSustain, your eco-friendly haven. We curate a diverse range of sustainable products, embracing a harmonious blend of style and responsibility. Committed to fostering a greener world, our mission is to make conscious living effortlessly chic. Join us in the journey towards a sustainable, stylish future.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>Christ University,Central Campus,Bangalore</li>
							<li>ShopSustain12@gmail.com</li>
							<li>+91 9999738833</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form method="POST">
							<input type="email" placeholder="Email" name="email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
							
<?php   
	if(isset($_POST['email'])){				   
    include('connection.php');
	$email = $_POST['email']; 
	$sql = "INSERT INTO mailing_list (email) VALUES ('$_POST[email]')";  
   
   $result = mysqli_query($con, $sql);  

   $count = mysqli_affected_rows($con);    
          
   if($count > 0)
       {  
           echo "<h6 text-color='red'>Message Recieved </center></h6>"; 
           //header("location:contact.php");
        }  
        else
       {  
            echo "<h6 text-color='red'> Login failed. Invalid username or password.</h6>"; 
            //header("location:failed.php"); 
        }     
		mysqli_close($con);
	}
	?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2024 - Tanmay Karra</a>,  All Rights Reserved.<br>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/shopsustain12/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/in/tanmay-karra/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>