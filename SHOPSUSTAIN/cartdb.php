<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopsustain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn = new mysqli($servername, $username, $password, $dbname);
			  $rs1= mysqli_query($conn, "select * from products where product_id=$_GET[product_id]");
			  $array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);
              $price=$array[0]['price']*1;
              $seller_id = $array[0]['seller_id'];
$sql = "INSERT INTO `cart`(`user_id`, `product_id`, `quantity`,`price`,`seller_id`)
 VALUES ('$_COOKIE[id]','$_GET[product_id]','1','$price','$seller_id')
 ON DUPLICATE KEY UPDATE quantity = quantity + 1;";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("location:shop.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>