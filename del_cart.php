<?php

include('config.php');
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM add_cart where id=$id");

header('location: cart.php');


?>