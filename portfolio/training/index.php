<?php

mysqli_report(MYSQLI_REPORT_OFF);

$link = @mysqli_connect('localhost', 'kera_kera', '5813910K', 'addressbook');

if (!$link) {
    error_log('Ошибка соединения: ' . mysqli_connect_errno());
}
?>