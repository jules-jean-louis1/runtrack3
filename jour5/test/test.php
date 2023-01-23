<?php

include 'Connect.php';

$connect = new Connect();
$checkLogin = $connect->verifyUser('admin');

$check = $connect->verifyLogin();
var_dump($check);


?>