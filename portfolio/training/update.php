<?php

    require_once 'config/connect.php';

    $product_id = $_GET['id'];
    $result = $mysqli->query($query);
    while ($row = $result->fetch_assoc()) {
    printf("%s (%s)\n", $row["title"], $row["description"], $row["price"]);
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<body>
<h3>Update Product</h3>
    <form action="vendor/create.php" method="post">
        <p>Title</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Description</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $people['price'] ?>"> 
        <br><br>
        <button type="submit">Add new product</button>
    </form>
</body>
</html>