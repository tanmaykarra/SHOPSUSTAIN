<?php      
    include('connection.php');  
    $email = $_POST['mail'];  
    $password = $_POST['pass'];  
      
        
   $sql = "select *from user where email = '$email' and password = '$password'";  
   $result = mysqli_query($con, $sql);  

   $row = mysqli_fetch_array($result);  
   $count = mysqli_num_rows($result);  
          
   if($count >0)
       {  
            echo "<h1><center> Login successful </center></h1>"; 
            header("location:index.php");
        }  
        else
       {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>