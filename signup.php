<?php
$con2 = mysqli_connect("localhost", "root", "", "shopsustain");
print_r($_POST);
echo "<br>";


echo "INSERT INTO user(username, Email, Password) 
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";


if(mysqli_query($con2,"INSERT INTO user (username, email, Password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')"))
{
    header("location:login.php");
} else {
echo "Something Went Wrong<br>";
}
?>