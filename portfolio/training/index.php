<?php

mysqli_report(MYSQLI_REPORT_OFF);

$connect = mysqli_connect('localhost', 'kera_kera', '5813910K', 'kera_addressbook');

if (!$connect) {
    echo 'Error connect to database!';
}
?>