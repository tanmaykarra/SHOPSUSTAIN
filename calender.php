<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Custom Calender</title>

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
								<li  class="current-list-item"><a href="">Functionalities</a>
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
						<p>Know about our Sales and Offers</p>
						<h1>Custom Calender</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
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
        background-color: orangered ; /* Green highlight color */
        color: #fff; /* White text */
    }
    .calendar-table .highlight div {
        font-size: 14px; /* Adjust font size for event names */
        color: #000; /* Black text for event names */
        margin-top: 5px; /* Add spacing between date and event name */
    }
</style>

<!-- Tips Section -->
<div class="tip-container" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <div class="tip" style="width: calc(50% - 20px); margin-bottom: 20px; border-radius: 10px; overflow: hidden; background-color: #fff; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
        <img src="assets/img/tip/water.jpg" alt="Reduce Water Usage" style="width: 100%; height: auto;">
        <div class="tip-content" style="padding: 20px;">
            <h3 style="font-size: 24px; margin-bottom: 10px; color: #007BFF;">Tip #1: Reduce Water Usage</h3>
            <p style="font-size: 16px; line-height: 1.6; margin-bottom: 0;">Fix leaks, install water-efficient appliances, and collect rainwater for outdoor use.</p>
        </div>
    </div>
    <div class="tip" style="width: calc(50% - 20px); margin-bottom: 20px; border-radius: 10px; overflow: hidden; background-color: #fff; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
        <div class="tip-content" style="padding: 20px;">
            <h3 style="font-size: 24px; margin-bottom: 10px; color: #007BFF;">Tip #2: Conserve Energy</h3>
            <p style="font-size: 16px; line-height: 1.6; margin-bottom: 0;">Switch to LED bulbs, unplug electronics when not in use, and use natural light whenever possible.</p>
        </div>
        <img src="assets/img/tip/energy.jpg" alt="Conserve Energy" style="width: 100%; height: auto;">
    </div>
    <div class="tip" style="width: calc(50% - 20px); margin-bottom: 20px; border-radius: 10px; overflow: hidden; background-color: #fff; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
        <img src="assets/img/tip/plastic.jpg" alt="Reduce Single-Use Plastics" style="width: 100%; height: auto;">
        <div class="tip-content" style="padding: 20px;">
            <h3 style="font-size: 24px; margin-bottom: 10px; color: #007BFF;">Tip #3: Reduce Single-Use Plastics</h3>
            <p style="font-size: 16px; line-height: 1.6; margin-bottom: 0;">Avoid plastic bags, bottles, and straws. Opt for reusable alternatives like metal water bottles and cloth bags.</p>
        </div>
    </div>
    <div class="tip" style="width: calc(50% - 20px); margin-bottom: 20px; border-radius: 10px; overflow: hidden; background-color: #fff; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
        <div class="tip-content" style="padding: 20px;">
            <h3 style="font-size: 24px; margin-bottom: 10px; color: #007BFF;">Tip #4: Choose Sustainable Transportation</h3>
            <p style="font-size: 16px; line-height: 1.6; margin-bottom: 0;">Walk, bike, carpool, or use public transportation to reduce carbon emissions from vehicles.</p>
        </div>
        <img src="assets/img/tip/trans.jpg" alt="Sustainable Transportation" style="width: 100%; height: auto;">
    </div>
    <!-- Add more tips with images -->
</div>
<!-- End Tips Section -->
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
    </body>
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
							<li><a href="services.html">Shop</a></li>
							<li><a href="contact.php">Contact</a></li>
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
					<p>Copyrights &copy; 2024 - Tanmay Karra</a>,  All Rights Reserved.<br>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
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
</html>
