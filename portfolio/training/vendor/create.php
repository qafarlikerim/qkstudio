<?php

require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, query:"INSERT INTO `products` (`id`, `title`, `price`, `descripsion`) VALUES (NULL, '$title', '$description', '$price')")