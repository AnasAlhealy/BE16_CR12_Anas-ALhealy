<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be16_cr12_lacasamia_anas_alhealy";

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
