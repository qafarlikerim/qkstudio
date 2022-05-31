<?php

require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
        </tr>

        <?php
            $products = mysqli_query($connect, query:"SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            print_r($products);
        ?>

        <tr>
            <td>1</td>
            <td>Product 1</td>
            <td>Lorem ipsum dolor sit amet</td>
            <td>1000</td>
        </tr>
    </table>    
</body>
</html>