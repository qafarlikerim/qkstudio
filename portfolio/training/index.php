<?php

mysqli_report(MYSQLI_REPORT_OFF);

$connect = mysqli_connect(host:'localhost', user:'kera_kera', password:'5813910K', database:'addressbook');

if (!$connect) {
    echo 'Error connect to database!';
}
?>