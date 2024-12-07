<?php

include('config.php');
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $insert = "INSERT INTO add_cart (name,price) VALUES ('$name','$price')";
    mysqli_query($conn,$insert);
    header('location:cart.php');
}


?>

