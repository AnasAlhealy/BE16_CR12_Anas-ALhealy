<?php

include_once('../components/db_connect.php');


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

        <div class="row row-cols-3 g-4">
            <?php
            $sql = "SELECT * FROM properties";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?php echo $row['image'] . '?hash=' . $row['id'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-text"><?php echo $row['advert_title'] ?></h5>
                                <p class="card-text fw-bold"><small>Size: </small><?php echo $row['size'] ?> m²</p>
                                <p class="card-text fw-bold"><small>Price: </small> € <?php echo number_format($row['price'], 0) ?></p>
                                <div class="text-center">
                                    <a href="details.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">DETAILS</a>
                                    <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-info">EDIT</a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">DELETE</a>
                                </div>
                            </div>
                        </div>
                    </div>



            <?php  }
            } ?>
        </div>

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