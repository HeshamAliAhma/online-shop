<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Online Shop | mycart</title>
    <link rel="stylesheet" href="index.css">
    <style>
        main{
            width:40%;
            margin-top:30px;
        }
        table{
            box-shadow:1px 1px 10px silver;
        }
        thead{
            background-color:#3498DB;
            color:white;
            text-align:center;
        }
        tbody{
            text-align:center;
        }
    </style>
</head>
<body>
<center>
<h3>
    المنتجات المحجوزة
</h3>
</center>

    <?php
        include('config.php');
        $result = mysqli_query($conn, "SELECT * FROM add_cart");
        while($row = mysqli_fetch_assoc($result)){
            echo "<center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product name</th>
                        <th scope='col'>Product price</th>
                        <th scope='col'>Product product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_cart.php?id=$row[id]' class='btn btn-danger'>ازالة</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center> ";
        }
    
    ?>
<center>
<a href='shop.php'>
الرجوع الي صفحة المنتجات</a>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>