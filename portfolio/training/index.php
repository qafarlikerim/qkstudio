<?php

$connect = @mysqli_connect('localhost', 'kera_kera', '5813910K', 'addressbook');

if (!connect) {
    error_log('Ошибка соединения: ' . mysqli_connect_errno());
}
?>