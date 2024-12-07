<?php

include 'config.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE from product where id=$id");

header('location: products.php');




?>