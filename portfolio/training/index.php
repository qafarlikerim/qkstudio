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
        <tr>
            <td>1</td>
            <td>Product 1</td>
            <td>Lorem ipsum dolor sit amet</td>
            <td>1000</td>
        </tr>
    </table>    
</body>
</html>