<?php

include('config.php');
$id = $_GET['id'];
$up = mysqli_query($conn, "SELECT * from product where id=$id");
$data = mysqli_fetch_assoc($up);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop | Home</title>
    <link rel="stylesheet" href="index.css">
    <style>
        input{
            display:none;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_cart.php" method='POST'>
                <h2>هل فعلا تريد شراء المنتج</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <button type="submit" name='add' class='btn btn-warning'>تأكيد الشراء</button>
                <br>
                <a href="shop.php">الرجوع لصفحة المنتجات</a>
            </form>
        </div>
    </center>
</body>
</html>