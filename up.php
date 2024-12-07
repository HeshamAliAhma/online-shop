<?php

include('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = 'images/'. $image_name;
    $update = "UPDATE product set name='$name' , price='$price' , image='$image_up' where id=$id ";
    mysqli_query($conn , $update);
    if(move_uploaded_file($image_location, 'images/' . $image_name)){
        echo "<script>alert('تم تحديث الصورة بنجاح')</script>";
    }else{
        echo "<script> alert('حدث مشكلة عند رفع الصورة') </script>";
    }
    header('location: products.php');
}


?>