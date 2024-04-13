<?php
include('connection.php');

$rs1 = mysqli_query($con, "SELECT * FROM cart WHERE user_id = $_COOKIE[id]");
$array = mysqli_fetch_all($rs1, MYSQLI_ASSOC);

foreach($array as $value) {
    $sql1 = "INSERT INTO orders (user_id, product_id, quantity, unit_price, seller_id) 
             VALUES ($_COOKIE[id], '{$value['product_id']}', '{$value['quantity']}', '{$value['price']}','{$value['seller_id']}')";
    mysqli_query($con, $sql1);
}

$sql = "DELETE FROM cart WHERE user_id = $_COOKIE[id]";

if(mysqli_query($con, $sql)) {
    echo "Order Placed Successfully. Redirecting...";
    // Optional: You can redirect using JavaScript after a delay
    echo "<script>setTimeout(function() { window.location = 'placed.html'; }, 3000);</script>";
} else {
    echo "Something went wrong.";
}

mysqli_close($con);
?>
