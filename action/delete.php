<?php include_once('../components/db_connect.php');

if (isset($_GET['id'])) {

    $sql = 'DELETE FROM `properties` WHERE id = ' . $_GET['id'];
    mysqli_query($connect, $sql);
    header("Location: home.php");
    exit();
}
