<?php
$con2 = mysqli_connect("localhost", "root", "", "shopsustain");
print_r($_POST);
echo "<br>";


$sql = "INSERT INTO users(username, Email, Password) 
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";


if(mysqli_query($con2,$sql))
{
    header("location:login.php");
} else {
echo "Something Went Wrong<br>";
}
?>