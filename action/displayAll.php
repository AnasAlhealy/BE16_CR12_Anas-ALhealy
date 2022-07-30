<?php
include_once('../components/db_connect.php');
header("Content-Type:application/json");

$sql = "SELECT * FROM properties";

if (isset($_GET["price_reduction"])) {
    $sql .= " WHERE price_reduction = 1";
}
$result = mysqli_query($connect, $sql);

$output = array();

while ($row = mysqli_fetch_assoc($result)) {

    $output[] = $row;
}
echo json_encode($output);
