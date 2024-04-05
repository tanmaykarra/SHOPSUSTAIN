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

// Fetch product price
print_r($_POST);
$rs1 = mysqli_query($conn, "SELECT price FROM products WHERE product_id='$_POST[id]'");
if ($rs1) {
  $row = mysqli_fetch_all($rs1,MYSQLI_ASSOC);
  print_r($row);
  $price = $row['price'];
} else {
  echo "Error fetching product price: " . mysqli_error($conn);
  exit(); // Exit if price retrieval fails
}

// Escape variables to avoid SQL injection
$user_id = mysqli_real_escape_string($conn, $_COOKIE['id']);
$product_id = mysqli_real_escape_string($conn, $_POST['id']);
$quantity = mysqli_real_escape_string($conn, $_POST['quant']);
$price = mysqli_real_escape_string($conn, $price);

// Construct the SQL query
$sql = "INSERT INTO cart(`user_id`, `product_id`, `quantity`, `price`)
        VALUES ('$user_id', '$product_id', '$quantity', '$price')
        ON DUPLICATE KEY UPDATE quantity = quantity + '$quantity'";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  // header("location: cart.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
