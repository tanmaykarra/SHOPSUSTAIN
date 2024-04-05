<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title -->
	<title>Event Noticeboard</title>

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
						<p>Enjoy these milestones with us</p>
						<h1>Event Noticeboard</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Why <span class="orange-text">Attend ?</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-heart"></i>
									</div>
									<div class="content">
										<h3>Friends</h3>
										<p>Meet like minded people and make new friends</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-tag"></i>
									</div>
									<div class="content">
										<h3>Best Price</h3>
										<p>Unbeatable buy with top-quality sustainable products.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-gift"></i>
									</div>
									<div class="content">
										<h3>Games</h3>
										<p>Fun games and faboulous prizes .</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-tree"></i>
									</div>
									<div class="content">
										<h3>Solutions</h3>
										<p>Discuss solutions for environmental concerns with industry experts.</p>
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
<style>
    /* Calendar CSS styles */
    .calendar-container {
        max-width: 800px; /* Adjust the width as needed */
        margin: 20px auto;
        padding: 20px;
        border: 2px solid grey; /* Black border */
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); /* Shadow effect */
        background-color: #f9f9f9; /* Light gray background */
    }
    .calendar-header {
        text-align: center;
        font-size: 28px;
        margin-bottom: 20px;
        color: #000; /* Black text */
    }
    .calendar-table {
        width: 100%;
        border-collapse: collapse;
    }
    .calendar-table th, .calendar-table td {
        padding: 20px; /* Increase padding */
        text-align: center;
        border: 1px solid #000; /* Black border */
    }
    .calendar-table th {
        background-color: green;
        color: #fff; /* White text */
    }
    .calendar-table td {
        cursor: pointer;
    }
    .calendar-table .highlight {
        background-color: orangered; /* Green highlight color */
        color: #fff; /* White text */
    }
    .calendar-table .highlight div {
        font-size: 14px; /* Adjust font size for event names */
        color: #000; /* Black text for event names */
        margin-top: 5px; /* Add spacing between date and event name */
    }
</style>
<div class="mt-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3>Know about our <span class="orange-text">Sales and Offers</span></h3>
					<!-- Updated paragraph content -->
					<!-- Updated paragraph content -->
<p>Discover our exclusive sales and offers for January 2024. Dive into a world of savings with our carefully curated selection of eco-friendly products.Don't miss out on these limited-time deals—explore eco-friendly products at unbeatable prices .  Take advantage of these eco-friendly bargains today!</p>

				</div>
			</div>
		</div>
    </div>
</div>
		<br>		
<div class="calendar-container">
        <h1 class="calendar-header">Custom Calendar</h1>
        <div>
            <label for="month">Month:</label>
            <input type="number" id="month" min="1" max="12" value="1">
            <label for="year">Year:</label>
            <input type="number" id="year" min="1900" max="2100" value="2022">
            <button onclick="generateCalendar()">Generate Calendar</button>
        </div>
        <table class="calendar-table" id="calendarTable">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody id="calendarBody">
                
            </tbody>
        </table>
    </div>
<script>
    // Important environmental days
    const environmentalDays = [
		{ month: 1, day: 2, event: 'Anniversery Sale' },
        { month: 4, day: 22, event: 'Earth Day' },
		{ month: 6, day: 2, event: 'World Environmental Day' },
		{ month: 5, day: 20, event: 'World Bee Day' },
		{ month: 4, day: 20, event: 'Earth Day sale Starts' },
		{ month: 4, day: 25, event: 'Last Day of sale' },
        // Add more events as needed
    ];

    function generateCalendar() {
        const month = parseInt(document.getElementById('month').value);
        const year = parseInt(document.getElementById('year').value);
        const daysInMonth = new Date(year, month, 0).getDate();
        const firstDay = new Date(year, month - 1, 1).getDay();

        const calendarBody = document.getElementById('calendarBody');
        calendarBody.innerHTML = '';

        let dateCounter = 1;

        for (let i = 0; i < 6; i++) {
            const row = document.createElement('tr');

            for (let j = 0; j < 7; j++) {
                const cell = document.createElement('td');

                if (i === 0 && j < firstDay) {
                    // Empty cells before the first day of the month
                    cell.textContent = '';
                } else if (dateCounter > daysInMonth) {
                    // Empty cells after the last day of the month
                    cell.textContent = '';
                } else {
                    cell.textContent = dateCounter;

                    // Check if the current date has an environmental event
                    const event = environmentalDays.find(event => event.month === month && event.day === dateCounter);
                    if (event) {
                        cell.classList.add('highlight');
                        // Display the event name below the date
                        const eventLabel = document.createElement('div');
                        eventLabel.textContent = event.event;
                        cell.appendChild(eventLabel);
                    }

                    dateCounter++;
                }

                row.appendChild(cell);
            }

            calendarBody.appendChild(row);
        }
    }
document.getElementById('month').value = 1; // January
document.getElementById('year').value = 2024; // 2024

// Call the generateCalendar function after setting default values
generateCalendar();
</script>
<br>
<br>
<br>
	<section>
    <div class="leftBox">
        <div class="content">
            <h1>
                Global Environmental Events Calender
            </h1>
            <p>
                Dear Valued Consumers,

                As stewards of our planet, we are excited to extend 
				a warm invitation to you to participate in the upcoming 
				environmental events! At ShopSustain, 
				we recognize the critical importance of environmental 
				conservation and sustainability, and are committed to 
				making a positive impact on our planet.
                <br>      
                Our environmental events provide unique opportunities for you 
				to connect with like-minded individuals, learn about pressing 
				environmental issues, and take meaningful action to protect our environment. 
				Whether you're passionate about wildlife conservation, climate change mitigation, 
				or sustainable living practices, there's something for everyone at the events.
            </p>
        </div>
    </div>
    <div class="events">
        <ul>
            <li>
                <div class="time">
                    <h2>
                        21 <br><span>March</span>
                    </h2>
                </div>
                <div class="details">
                    <h3>
                        International Day of Forests
                    </h3>
                    <p>
                        resolution of the UN General Assembly to raise awareness on importance of Forests
                    </p>
                    <a href="https://unece.org/forests/events/public-event-international-day-forests-2024#:~:text=Palais%20des%20Nations%2C%20Geneva%2C%20Switzerland,with%20a%20two%2Dpart%20event.">View Details</a>
                </div>
                <div style="clear: both;"></div>
            </li>
            <li>
                <div class="time">
                    <h2>
                        22 <br><span>April</span>
                    </h2>
                </div>
                <div class="details">
                    <h3>
                        Earth Day
                    </h3>
                    <p>
                        held to raise awareness and support for environmental protection. 
                    </p>
                    <a href="https://www.hayward-ca.gov/earth-day">View Details</a>
                </div>
                <div style="clear:both;"></div>
            </li>
            <li>
                <div class="time">
                    <h2>
                        5 <br><span>June</span>
                    </h2>
                </div>
                <div class="details">
                    <h3>
                        World Environment Day 
                    </h3>
                    <p>
                        encourages awareness and action for the protection of the environment. 
                    </p>
                    <a href="https://www.worldenvironmentday.global/about/theme-host">View Details</a>
                </div>
                <div style="clear:both;"></div>
            </li>
        </ul>
    </div>
</section>
<br>
<br>
<br>
<br>

	<!-- more events section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>More Upcoming <span class="orange-text">Events</span></h3>
						<p>We invite you to be part of our environmental community and contribute your time, energy, and enthusiasm to these important initiatives. Together, let's inspire positive change and pave the way for a greener, more sustainable future.

						We look forward to seeing you at our upcoming environmental events!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg notice-bg-1"></div> 
						<h4>World Bee Day<span>May 20</span></h4>
						<ul class="social-link-team">
							<li><a href="https://www.un.org/en/observances/bee-day#:~:text=22%20May%202023%2C%201%3A15,2%3A30%20PM%20(EDT)&text=The%20New%20York%2Dbased%20event,good%20practices%20of%20supporting%20communities." target="_blank"><i class="fas fa-info-circle"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg notice-bg-2"></div>
						<h4>World Oceans Day<span>June 8</span></h4>
						<ul class="social-link-team">
							<li><a href="https://worldoceanday.org/" target="_blank"><i class="fas fa-info-circle"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg notice-bg-3"></div>
						<h4>World Rainforest Day <span>June 22</span></h4>
						<ul class="social-link-team">
							<li><a href="https://www.rainforestpartnership.org/blog/celebrate-world-rainforest-day-june-22" target="_blank"><i class="fas fa-info-circle"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- more events section -->

	<br>
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