<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENT NOW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <nav>
        <h1>HOW TO RENT A PRODUCT</h1>
        <br>
        <p> Form Rental Outdoor O.M. Adventure</p>
    </nav>

    <nav class="hero">
        <div class="layout">
            <form action="./landing.php" method="post" class="form">
                <?php
                include "dataRental.php";
                ?>

                <label for="username">Nama Customer : </label>
                <input type="text" id="username" name="username" required>
                <br><br>
                <label for="email">Email : </label>
                <input type="email" id="email " name="email" required>
                <br><br>
                <label for="date">Tanggal pinjam :</label>
                <input type="date" id="pinjam" name="pinjam">
                <br><br>
                <label for="date2">Tanggal kembali : </label>
                <input type="date" id="kembali" name="kembali">
                <br><br>
                <label for="rental">Mau rental apa? (max 1 qty/item) </label>

                <?php foreach ($ALL as $item => $harga): ?>
                    <label class="item">
                        <input class="check" type="checkbox" name="rent[]" value="<?= $item ?>">
                        <?= $item ?> - Rp <?= number_format($harga, 0, ",", ".") ?>
                    </label><br>
                <?php endforeach; ?>
                <br><br>
                <div class="btn-group">
                    <button type="submit" type="button" class="btn btn-info" style="color: white;">FIKS BANGET</button>
                    <button type="reset" type="button" class="btn btn-secondary">RESET</button>
                </div>
            </form>
        </div>
    </nav>

</body>

</html>