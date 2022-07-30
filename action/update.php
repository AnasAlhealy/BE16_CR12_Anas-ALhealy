<?php

include_once('../components/db_connect.php');

if (isset($_POST['save'])) {

    $sql = "UPDATE `properties` SET `advert_title`='" . addslashes($_POST['advert_title']) . "',`size`='" . addslashes($_POST['size']) . "',`room_number`='" . addslashes($_POST['room_number']) . "',`city`='" . addslashes($_POST['city']) . "',`price`='" . addslashes($_POST['price']) . "',`latitude`='" . addslashes($_POST['latitude']) . "',`longitude`='" . addslashes($_POST['longitude']) . "',`image`='" . addslashes($_POST['image']) . "',`price_reduction`='" . addslashes($_POST['price_reduction']) . "' WHERE id = " . $_GET['id'];
    mysqli_query($connect, $sql);
    header("Location: ./home.php");
    exit();
}

$sql = 'SELECT * FROM properties WHERE id = ' . $_GET['id'];
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Casa Mia</title>
    <?php include_once('../components/boot.php') ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">La Casa Mia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="home.php">Home</a>
                    </li>

                </ul>

            </div>
            <div class="">
                <a class="btn btn-dark" href="opportunity.html">Opportunity</a>
                <a class="btn btn-primary" href="create.php">Create</a>
            </div>
        </div>
    </nav>

    <div class="hero">
        <p class="display h1">La Casa Mia</p>
    </div>


    <div class="container pt-5">

        <form method="POST" action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Title</label>
                <input type="text" class="form-control" name="advert_title" value="<?php echo $row["advert_title"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Size</label>
                <input type="text" class="form-control" name="size" value="<?php echo $row["size"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Room Number</label>
                <input type="text" class="form-control" name="room_number" value="<?php echo $row["room_number"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">City</label>
                <input type="text" class="form-control" name="city" value="<?php echo $row["city"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo $row["price"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Latitude</label>
                <input type="text" class="form-control" name="latitude" value="<?php echo $row["latitude"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Longitude</label>
                <input type="text" class="form-control" name="longitude" value="<?php echo $row["longitude"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Image</label>
                <input type="text" class="form-control" name="image" value="<?php echo $row["image"]; ?>" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Price Reduction</label>
                <input type="text" class="form-control" name="price_reduction" value="<?php echo $row["price_reduction"]; ?>" />
            </div>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="submit" name="save" class="btn btn-primary btn-lg">Send</button>
            </div>
        </form>
    </div>
    <footer class="mt-4">
        <div class="icons d-flex justify-content-center gap-5 fs-3 pt-4">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
        <div class="copyright d-flex justify-content-center align-content-center pt-2">
            <p>&copy; Copyright: La Casa Mia</p>
        </div>
    </footer>
</body>

</html>