<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Checkout</title>

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
								<li  class="current-list-item"><a href="shop.php">Shop</a>
								<li><a href="order.php">My orders</a></li>
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
								<form id="form1" action="checkout.php" method="post">
						        		<p><input type="text" name = "name" required placeholder="Full Name" required></p>
						        		<p><input type="email" required value="<?=$_COOKIE['email']?>"></p>
						        		<p><input type="text" required name = "address" placeholder="Address"></p>
						        		<p><input type="tel" required name = "phone" placeholder="Phone"></p>

										<?php
	                                    if(isset($_POST['name'])){
										include('connection.php');  
										$name = $_POST['name']; 
										$address = $_POST['address'];
										$phone = $_POST['phone'];
										
											
									   $sql = "UPDATE user
									   SET address = '$_POST[address]', name = '$_POST[name]', phone = '$_POST[phone]'
									   WHERE user_id = $_COOKIE[id]";  
									   
									   $result = mysqli_query($con, $sql);  
									
									   $count = mysqli_affected_rows($con);
									   if($count >0){
										// header('index.php');
									   }
									   else{
										
									   }
										}   
									?>
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
							  <form id="form2" action="checkout.php" method="post">
						        		<p><input type="text" name = "namec" required placeholder="Name of card holder"></p>
						        		<p><input type="text" name = "expiry" required placeholder="Expiry"></p>
						        		<p><input type="text" name = "cardn" required placeholder="Card Number"></p>
										<p><input type="text" name = "cvv" required placeholder="CVV"></p>

									<?php
	                                    if(isset($_POST['namec'])){
										include('connection.php');  
										$namec = $_POST['namec']; 
										$expiry = $_POST['expiry'];
										$cardn = $_POST['cardn'];
										$cvv = $_POST['cvv'];
										
											
									   $sql = "INSERT INTO payment (user_id,name_c,cardn,cvv,expiry) 
									   VALUES ($_COOKIE[id],'$_POST[namec]','$_POST[cardn]','$_POST[cvv]','$_POST[expiry]')";  
									   
									   $result = mysqli_query($con, $sql);  
									
									   $count = mysqli_affected_rows($con);
									   if($count >0){
										//header('index.php');
									   }
									   else{

									   }
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
							if(isset($_COOKIE['username'])){
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
							endforeach;} }?>
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
						<script>
    function visitPage(){
        window.location='ordert.php';
    }
</script>
						<!-- <button class="update-btn2" id="checkout-btn" name = "submit" onclick="function()">Place Order</button> -->
						<button class="update-btn2" id="checkout-btn" onclick = "visitPage();" onclick="submitForms()">Place Order</button>

		<script>
		function submitForms() {
        var forms = document.querySelectorAll('form');
        var formData = new FormData();

        // Loop through each form and append its data to formData
        forms.forEach(function(form) {
            var inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(function(input) {
                formData.append(input.name, input.value);
            });
        });

        // Create a temporary form element to submit the combined form data
        var tempForm = document.createElement('form');
        tempForm.style.display = 'none';
        tempForm.method = 'post';
        tempForm.action = 'checkout.php';

        // Append formData to the temporary form
        for (var pair of formData.entries()) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = pair[0];
            input.value = pair[1];
            tempForm.appendChild(input);
        }

        // Append the temporary form to the body and submit it
        document.body.appendChild(tempForm);
        tempForm.submit();
    }
</script>
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
	
	
	<!-- ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	

</body>
</html>