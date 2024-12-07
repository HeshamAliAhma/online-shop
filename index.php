<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop | Home</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method='POST' enctype='multipart/form-data'> <!-- without `enctype='multipart/form-data'` we can't upload image -->
                <img src="logo.png" alt="logo" width='400px'>
                <input type="text" name='name'> 
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" name='image' id='file' style='display:none'>
                <label for="file">اختيار صورة المنتج</label>
                <button name='upload'>رفع المنتج</button>
                <br><br>
                <a href="products.php" class='all-products-link'>عرض كل المنتجات</a>
            </form>
        </div>
        <br>
        <h3>Developer by Hesham</h3>
    </center>
</body>
</html>