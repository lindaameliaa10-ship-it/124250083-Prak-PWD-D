<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Odet Adventure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
</head>

<body class="home">

    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <img src="assets/id.jpeg" height="80">
                <span class="fs-4">Odet Mountain Adventure</span>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link active">Katalog</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link ">About</a></li>
            </ul>
        </header>
    </div>

    <div class="hero">

        <div class="hero-text">
            <?php
                include "dataRental.php";
                ?>
            <h1 class="subjek">PRICELIST</h1>
            <?php foreach ($ALL as $item => $harga): ?>
                <div class="item">
                    <?= $item ?>
                    <span class="price">
                        Rp<?= number_format($harga, 0, ",", ".") ?>
                    </span>
                </div>
            <?php endforeach; ?>
            <br>

            <a href="form.php" class="btn btn-warning">RENT NOW</a>

        </div>
    </div>

</body>

</html>