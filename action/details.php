<?php

include_once('../components/db_connect.php');



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

            <div class="float-end d-block">
                <img class="map2" src="<?php echo $row["image"]; ?>">
                <div id="map"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Title</label>
                <p class="fs-5"><?php echo $row["advert_title"]; ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Size</label>
                <p class="fs-5"><?php echo $row["size"]; ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Room Number</label>
                <p class="fs-5"><?php echo $row["room_number"]; ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">City</label>
                <p class="fs-5"><?php echo $row["city"]; ?> </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Price</label>
                <p class="fs-5"><?php echo $row["price"]; ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Latitude</label>
                <p class="fs-5"><?php echo $row["latitude"]; ?></p>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Longitude</label>
                <p class="fs-5"><?php echo $row["longitude"]; ?></p>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold fs-1">Price Reduction</label>
                <p><?php echo $row["price_reduction"]; ?></p>
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
    <script>
        var map;

        function initMap() {
            var vienna = {
                lat: <?php echo $row["latitude"] ?>,
                lng: <?php echo $row["longitude"] ?>
            };
            map = new google.maps.Map(document.getElementById('map'), {

                center: vienna,
                zoom: 12
            })
            pin = new google.maps.Marker({
                position: vienna,
                map: map,
            })

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
</body>

</html>