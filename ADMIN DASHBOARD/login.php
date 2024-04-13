<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="./assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center"><img src="./assets/images/logos/dark-logo.png" width="160" height = "100" alt="" /></p>
                <form method = "post" action = "login.php">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name = "email">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name = "pass">
                  </div>
                  <?php     
if(isset($_POST['email'])){ 
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
      
        
   $sql = "select * from seller where email = '$email' and password = '$password'";  
   $result = mysqli_query($con, $sql);  

   $row = mysqli_fetch_array($result);  
   $count = mysqli_num_rows($result);  
          
   if($count >0)
       {  
            echo "<h1><center> Login successful </center></h1>"; 
            print_r($row['username']);
            $cookie_name = "email";
            $cookie_value = "$row[email]";
            setcookie($cookie_name, $cookie_value);
            $cookie_name = "store";
            $cookie_value = "$row[store_name]";
            setcookie($cookie_name, $cookie_value);
            $cookie_name = "id";
            $cookie_value = "$row[seller_id]";
            setcookie($cookie_name, $cookie_value);
            $cookie_name = "pass";
            $cookie_value = "$row[password]";
            setcookie($cookie_name, $cookie_value);
            header("location:index.php");
        }  
        else
       {  
            echo "<h7 style='color:red;'> Login failed. Invalid username or password.</h7><br>"; 
            
        }   
    }  
?>
<br>
                   <input type="submit" value="Sign In" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to ShopSustain?</p>
                    <a class="text-primary fw-bold ms-2" href="./register.php">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>