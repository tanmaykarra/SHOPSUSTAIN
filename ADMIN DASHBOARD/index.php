<!doctype html>
<html lang="en">
<?php
include('connection.php');
$sql2 = "SELECT SUM(totalprice) AS total FROM orders WHERE seller_id = $_COOKIE[id]";
$result = mysqli_query($con, $sql2);
$row = mysqli_fetch_array($result);
print_r($row['total']) ;
// Adjust error reporting settings to hide notices and warnings
error_reporting(E_ERROR | E_PARSE);



// Check if the cookie is set
if(isset($_COOKIE['id'])){
    // Perform database query
    $rs1 = mysqli_query($con, "select * from orders where seller_id = $_COOKIE[id]");
    
    // Check if the query was successful
    if($rs1){
        // Fetch the results
        $array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
        
        // Initialize an array to store earnings
        $earnings_this_month = [];
        
        // Calculate earnings (assuming you want to divide totalprice by 10 for each result)
        foreach($array as $item){
            $earnings_this_month[] = $item['totalprice'];
        }
    } else {
        // Handle database query error
        $earnings_this_month = []; // or any other error handling logic
    }
} else {
    // Handle cookie not set error
    $earnings_this_month = []; // or any other error handling logic
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.php" class="text-nowrap logo-img">
            <img src="./assets/images/logos/dark-logo.png" width="160" height = "100" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./register.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./add_product.php" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Add Products</span>
              </a>
            </li>
          </ul>
         
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li>
              <centre><h1>Welcome <span class = span1> <?php if(isset($_COOKIE['store'])){?>
										<?=ucfirst($_COOKIE['store']);}?></span>!</h1></centre>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="profile.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="./login.php" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">Switch account</p>
                    </a>
                    <a href="./login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Orders Recieved</h5>
                  </div>
                  <div>
                  </div>
                </div>
                
                <div id="chart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Total Revenue </h5>
                        <h4 class="fw-semibold mb-3">₹<?= $row[0]?></h4>
                        <div class="d-flex align-items-center pb-1">
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-rupee fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Order Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Customer</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Order Amount</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                $rs1= mysqli_query($con, "select * from orders where seller_id = $_COOKIE[id]");
								$array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
                foreach($array as $value):
								?>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?=$value['order_id']?></h6></td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1"><?=$value['custname']?></h6>                       
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?=$value['totalprice']?></p>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4"><?=$value['order_date']?></h6>
                        </td>
                        <?php endforeach;?>
                      </tr>                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://www.linkedin.com/in/tanmay-karra/" target="_blank" class="pe-1 text-primary text-decoration-underline">Tanmay Karra</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>
<script src="./assets/js/app.min.js"></script>
<script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  
  <script>

  $(function () {
    // Initialize arrays to store earnings data and x-axis labels
    var earningsData = [];
    var xAxisLabels = [];

    <?php
    // Loop through the sales data to extract relevant information
    foreach ($array as $index => $item) {
        // Push each earnings value to the JavaScript array
        echo 'earningsData.push(' . $item['totalprice'] . ');';
        // Push x-axis labels as per the index
        echo 'xAxisLabels.push(" ' . $item['order_date'] . '");';
    }
    ?>
    
    // Chart Data
    var chartData = {
      series: [
        { name: "Order Amount:", data: earningsData },
      ],
      chart: {
        type: "bar",
        height: 345,
        foreColor: "#adb0bb",
        fontFamily: 'inherit',
        toolbar: { show: true },
      },
      colors: ["#5D87FF", "#49BEFF"],
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: "35%",
          borderRadius: [6],
          borderRadiusApplication: 'end',
          borderRadiusWhenStacked: 'all'
        },
      },
      markers: { size: 0 },
      dataLabels: { enabled: false },
      legend: { show: false },
      grid: {
        borderColor: "rgba(0,0,0,0.1)",
        strokeDashArray: 3,
        xaxis: { lines: { show: false } },
      },
      xaxis: {
        type: "category",
        categories: xAxisLabels, // Use dynamically generated x-axis labels
        labels: { style: { cssClass: "grey--text lighten-2--text fill-color" } },
      },
      yaxis: {
        show: true,
        min: 0,
        max: Math.max(...earningsData), // Adjust y-axis max based on max earnings
        tickAmount: 4,
        labels: { style: { cssClass: "grey--text lighten-2--text fill-color" } },
      },
      stroke: { show: true, width: 3, lineCap: "butt", colors: ["transparent"] },
      tooltip: { theme: "light" },
      responsive: [{ breakpoint: 600, options: { plotOptions: { bar: { borderRadius: 3 } } } }],
    };

    // Create the chart
    var chart = new ApexCharts(document.querySelector("#chart"), chartData);
    chart.render();

    var earning = {
      chart: {
        id: "sparkline3",
        type: "area",
        height: 60,
        sparkline: { enabled: true },
        group: "sparklines",
        fontFamily: "Plus Jakarta Sans', sans-serif",
        foreColor: "#adb0bb",
      },
      series: [{ name: "", color: "#49BEFF", data: [12, 55, 20, 40, 12, 58, 20] }],
      stroke: { curve: "smooth", width: 2 },
      fill: { colors: ["#f3feff"], type: "solid", opacity: 0.05 },
      markers: { size: 0 },
      tooltip: { theme: "dark", fixed: { enabled: true, position: "right" }, x: { show: false } },
    };
    new ApexCharts(document.querySelector("#earning"), earning).render();
  });
</script>


</body>

</html>