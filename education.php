<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Educational Dashboard</title>

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
								<li class="current-list-item"><a href="">Functionalities</a>
									<ul class="sub-menu">
								<li><a href="education.php">Educational dashboard</a></li>
								<li><a href="noticeboard.php">Event Noticeboard</a></li>
								<li><a href="influencer.php">Influencer program</a></li>
								<li><a href="calculator.php">Carbon Footprint Calculator</a></li>
								<li><a href="calender.php">Custom Calender</a></li>
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
						<p>Green Insight Central</p>
						<h1>Educational Dashboard</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	<!-- shop banner -->
<section class="shop-banner">
	<div class="container">
		<h3> <br> Discover the benifits of using<span class="orange-text"> Eco-friendly products</span></h3>
		<br>
		<a href="education.html" class="cart-btn btn-lg">Learn Now</a>
	</div>
</section>
<!-- end shop banner -->
<!-- featured section -->
<div class="featureed-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="featured-text">
					<h2 class="pb-3">Why use <span class="orange-text">Eco-friendly Products</span></h2>
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fa-solid fa-seedling"></i>
								</div>
								<div class="content">
									<h3>Sustainability:</h3>
									<p>Eco-friendly products promote resource conservation, ensuring a balance between present needs and future generations.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fa-solid fa-solar-panel"></i>
								</div>
								<div class="content">
									<h3>Pollution Reduction:</h3>
									<p>They minimize environmental harm by using cleaner processes, reducing pollution in air, water, and soil.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fa-solid fa-suitcase-medical"></i>
								</div>
								<div class="content">
									<h3>Health Conscious:</h3>
									<p>These products prioritize human well-being, avoiding harmful chemicals and promoting a safer living environment.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="list-box d-flex">
								<div class="list-icon">
									<i class="fas fa-sync-alt"></i>
								</div>
								<div class="content">
									<h3>Renewable Resources:</h3>
									<p>Eco-friendly items encourage the use of renewable materials, contributing to sustainable resource management.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end featured section -->
<!-- latest news -->
<div class="latest-news pt-20 pb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">	
					<h3>Some Useful<span class="orange-text"> Links</span></h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single-latest-news">
					<a href="https://youtu.be/_e4bkXkeJEI?si=XjqywkDRA1iPpYnT"><div class = "latest-news-bg"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/_e4bkXkeJEI" title="eco friendly products importance - why is the production of eco-friendly products important" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div></a>
					<div class="news-text-box">
						<h3>Importance of using eco-friendly products</h3>
						<p class="excerpt">Learn why eco-friendly products matter for the environment and our future. </p>
						<a href="https://greenfeels.in/blogs/sustainability-basics/importance-of-eco-friendly-products" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-latest-news">
					<a href="https://youtu.be/xJZb_gWE0nk"><div class = "latest-news-bg"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/xJZb_gWE0nk" title="Learn Zero Waste Products Management||Eco-friendly||Awareness Message For Sustainable Environment" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div></a>
					<div class="news-text-box">
						<h3>Learn about zero waste products</h3>
						<p class="excerpt">Discover eco-friendly solutions to reduce waste and protect the environment. </p>
						<a href="https://en.wikipedia.org/wiki/Zero_waste" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
			<div class="single-latest-news">
					<a href="https://youtu.be/OasbYWF4_S8"><div class = "latest-news-bg"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/OasbYWF4_S8" title="Reduce, Reuse and Recycle, to enjoy a better life | Educational Video for Kids." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div></a>
					<div class="news-text-box">
						<h3>Learn about the three Rs 
							Reuse, Reduce and Recycle
						</h3>
						<p class="excerpt">Explore the three Rs and their importance in environmental conservation. </p>
						<a href="https://en.wikipedia.org/wiki/3R" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>                                                
<!-- end latest news -->
<br>
<style>
    /* Your custom CSS styles for the tips page */
    /* Example: */
    .tip-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 30px;
        border: grey;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        background-color: #f9f9f9;
    }

    .tip-container h2 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 20px;
        color: #000;
    }

    .tip-container p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }

    .tip-container .tip {
        margin-bottom: 20px;
    }

    .tip-container .tip h3 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #007BFF;
    }

    .tip-container .tip p {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
    }
</style>


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
	<script src="https://kit.fontawesome.com/2d24a17650.js" crossorigin="anonymous"></script>

</body>
</html>
