<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets\css\loginstyle.css">
    <title>Login</title>
</head>
<body>
<video id="background-video" autoplay loop muted>
  <source src="assets\img\background.mp4" type="video/mp4">
</video>
    <div class="container">
        <div class="signin-signup">
        <form action="signin.php" method = "POST" class="sign-in-form">
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="mail" name ="mail" type="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="pass" name="pass" type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn">
                
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="signup.php"  method="post" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id = "name" name = "name" type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id = "email" name = "email" type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" name="password" type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src = 'assets\img\logo.png' height="35%" width="35%">
                    <h3>Member of ShopSustain?</h3>
                    <p>Click here to Login</p>
                    <button class="btn" id="sign-in-btn">Login</button>
            </div>
        </div>
            <div class="panel right-panel">
                <div class="content">
                    <img src = 'assets\img\logo.png' height="35%" width="35%">
                    <h3>New to ShopSustain?</h3>
                    <p>Click here to Sign Up</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets\js\app.js"></script>
</body>
</html>