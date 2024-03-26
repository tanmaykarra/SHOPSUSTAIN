<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>ShopSustain</title>

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
								<li><a href="education.php">Educational dashboard</a></li>
								<li><a href="noticeboard.php">Event Noticeboard</a></li>
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
						<h1>Check Out Products</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
								<form id="form1" action="class1/add" method="post" >
						        		<p><input type="text" name = "name" required placeholder="Full Name"></p>
						        		<p><input type="email" required value="<?=$_COOKIE['email']  ?>"></p>
						        		<p><input type="text" required name = "address" placeholder="Address"></p>
						        		<p><input type="tel" required name = "phone" placeholder="Phone"></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
							  <div class="billing-address-form">
							  <form id="form2" action="class2/add" method="post" >
						        		<p><input type="text" name = "Namec" required placeholder="Name of card holder"></p>
						        		<p><input type="text" name = "expiry" required placeholder="Expiry"></p>
						        		<p><input type="text" name = "cardn" required placeholder="Card Number"></p>
										<p><input type="text" name = "cvv" required 	placeholder="CVV"></p>

									<?php
	                                    if(isset($_POST['namec' == NULL])){
										include('connection.php');  
										$namec = $_POST['namec']; 
										$expiry = $_POST['expiry'];
										$cardn = $_POST['cardn'];
										$cvv = $_POST['cvv'];
										
											
									   $sql = "INSERT INTO payment (user_id,name_card,cardn,cvv) 
									   VALUES ($_COOKIE[id],'$_POST[name_c]','$_POST[name]','$_POST[cvv]')";  
									   
									   $result = mysqli_query($con, $sql);  
									
									   $count = mysqli_affected_rows($con);
										}   
									?>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
							<!-- <tr>
									<td>Product</td>
									<td>Total</td>
									<td>Quantity</td>
								</tr> -->
							<?php
							include('connection.php');
							$rs1= mysqli_query($con, "select * from cart where user_id=$_COOKIE[id]");
							$array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
							//print_r($array);
							$j = count($array);
							$i = 0;
							while ($i < $j) {
								//echo $i;
								
							$pid=$array[$i]['product_id'];
							$rs2= mysqli_query($con, "select * from products where product_id=$pid");
							$array2 = mysqli_fetch_all($rs2, MYSQLI_ASSOC);
							$rs3= mysqli_query($con, "select * from cart where product_id=$pid and user_id=$_COOKIE[id] and quantity > 0");
							$array3 = mysqli_fetch_all($rs3, MYSQLI_ASSOC);
							$i++;
							foreach($array2 as $value):
								foreach($array3 as $value1):
							?>	
							<tr>
									<td><?=$value['name']?></td>
									<td><?=$value['price']?></td>
									<td><?=$value1['quantity']?></td>
									
								</tr>
							
								<?php endforeach;
							endforeach;} ?>
							</tbody>
							<tbody class="checkout-details">	
							<tr>
									<td>Total</td>
									<td><?php if(isset($_COOKIE['username'])){$sql = "select SUM(final_price) as SUM from cart where user_id =$_COOKIE[id];";
									$result = mysqli_query($con, $sql);
									$row = mysqli_fetch_array($result);
									print_r($row['SUM']) ;
									}
									else{
										print_r('0');
									}
									?></td>
								</tr>
							</tbody>
						</table>
						<br>
						<!-- <button class="update-btn2" id="checkout-btn" name = "submit" onclick="function()">Place Order</button> -->
						<button class="button button-gray" id="checkout-btn" onclick="submitform()"><span class="accept"></span>Place Order</button>
						<!-- <a href="#" class="boxed-btn">Place Order</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Shop</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
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
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
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
	<script>
    submitform = function(){
        document.getElementById("form1").submit();
        
        setTimeOut(function() {
            document.getElementById("form2").submit();
        }, 5000);
    }
</script>
	$(document).ready(function(){
    $('#checkout-btn').click(function(event){
        event.preventDefault(); // Prevent default form submission
        
        console.log("Place Order button clicked");

        // Submit the first form
        $('#address-form').submit();
        console.log("Address form submitted");

        // Submit the second form
        $('#card-form').submit();
        console.log("Card form submitted");
    });
});

</script>

</body>
</html>

<?php

if(isset($_POST['name'])){   
	include('connection.php');  
	$name = $_POST['name']; 
	$phone = $_POST['phone'];
	$address = $_POST['address'];

   $sql = "UPDATE user SET name = '$_POST[name]', phone = '$_POST[phone]', address = '$_POST[address]' WHERE user_id = $_COOKIE[id]";  
   
   $result = mysqli_query($con, $sql);  								
   $count = mysqli_affected_rows($con);   
} 
?>