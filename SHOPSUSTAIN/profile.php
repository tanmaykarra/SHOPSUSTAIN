<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>Profile Update</title>

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
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
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
                                <li class="current-list-item"><a href="order.php">My orders</a></li>
								<li><a href="">Functionalities</a>
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
						<p></p>
						<h1>User Profile</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	

  <div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Update User Details</h2>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" method="POST" action="profile.php" id="fruitkha-contact">
							<p>
                <label>Username:</label>
								<input type="text" value="<?=$_COOKIE['username']?>" name="username" id="name" required><br><br>
                <label>email:</label>
								<input type="text" value="<?=$_COOKIE['email']?>" name="email" id="name" required>
							<p>
              <p>
                <label>Name:</label>
								<input type="text" value="<?=$_COOKIE['name']?>" name="name" id="name" required><br><br>
                <label>password:</label>
								<input type="text" value="<?=$_COOKIE['pass']?>" name="password" id="name" required>
                <p>
                <label>Phone:</label>
								<input type="text" value="<?=$_COOKIE['phone']?>" name="phone" id="name" required><br><br>
                <label>address:</label>
								<input type="text" value="<?=$_COOKIE['address']?>" name="address" id="name" required>
                    </p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							
							<!-- PHP CODE -->
              <?php
      if(isset($_POST['name'])){
        include('connection.php');  
        $username = $_POST['username']; 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
          
         $sql = "UPDATE user
         SET username = '$_POST[username]', email = '$_POST[email]', password = '$_POST[password]',name = '$_POST[name]',phone = '$_POST[phone]',address = '$_POST[address]'
         WHERE user_id = $_COOKIE[id]";  
         
         $result = mysqli_query($con, $sql);  
         $count = mysqli_affected_rows($con);
         if($count > 0){
          ?><script> window.location="login.php";</script>
         <?php }
         else{
         }
        }   
      ?>
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
      </div>
      </div>
      <br>

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