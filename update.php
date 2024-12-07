<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop | update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    
    include('config.php');
    $id =$_GET['id'];
    $update = mysqli_query($conn, "SELECT * from product where id = $id");
    $data = mysqli_fetch_assoc($update);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method='POST' enctype='multipart/form-data'> <!-- without `enctype='multipart/form-data'` we can't upload image -->
                <input type="text" name='id' value='<?php echo $data['id']?>'> 
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'> 
                <br>
                <input type="text" name='price'value='<?php echo $data['price']?>'>
                <br>
                <input type="file" name='image' id='file' style='display:none'>
                <label for="file">اختيار صورة المنتج</label>
                <button name='update'>تحديث المنتج</button>
                <br><br>
                <a href="products.php" class='all-products-link'>عرض كل المنتجات</a>
            </form>
        </div>
        <br>
        <h3>Developer by Hesham</h3>
    </center>
</body>
</html>