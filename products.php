<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Online Shop | Proucts</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .card{
            float:right;
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;

        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
            width:60%;
        }
    </style>
</head>
<body>
    <h3 class="text-center">لوحة تحكم الأدمن</h3>

    <?php
    include('config.php');

    $products = "SELECT * FROM `product`"; 
    $result = mysqli_query($conn, $products);
    
    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <main>
            <div class="card" style="width: 18rem;">
                <img src="' . $row['image'] . '" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">' . $row['name'] . '</h5>
                    <p class="card-text">' . $row['price'] . '</p>
                    <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger">حذف المنتج</a>
                    <a href="update.php?id=' . $row['id'] . '" class="btn btn-primary">تعديل المنتج</a>
                </div>
            </div>
        </main>';
    }
?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>