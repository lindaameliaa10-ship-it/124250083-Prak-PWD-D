<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="./css/landing.css">
</head>
<body>
    <nav>
        <div>
             <?php
                include "dataRental.php";
                $customer = $_POST['username'] ;
                $email = $_POST['email'] ;
                $tanggal_pinjam = $_POST['pinjam'] ;
                $tanggal_kembali = $_POST['kembali'] ;
                $rent = $_POST['rent'];

                $total = 0;

                foreach ($rent as $item) {

                    if (isset($TENDA[$item])) {
                        $total += $TENDA[$item];
                    }
                    if (isset($TAS_CARRIER[$item])) {
                        $total += $TAS_CARRIER[$item];
                    }
                    if (isset($ALATMASAK[$item])) {
                        $total += $ALATMASAK[$item];
                    }
                    if (isset($ALATALAT[$item])) {
                        $total += $ALATALAT[$item];
                    }
                }
            ?>
            <h2>---STRUK RENTAL BARANG---</h2>
            <h3>Odet Mountain Adventure</h3>
            <hr>
            <p class="data">
                Nama            : <?= $customer ?> <br>
                Email           : <?= $email ?> <br>
                Tanggal pinjam  : <?= $tanggal_pinjam ?> <br>
                Tanggal kembali : <?= $tanggal_kembali ?> <br>
            </p>

            <hr>
            <p class="item">Item disewa (1 qty/ produk) :</p>
            <ul class="list-barang">
            <?php
            $total = 0;
            foreach ($rent as $item){
                $harga = $ALL[$item];
                $total += $harga;
                echo "<li class='list'>$item - Rp ".number_format($harga,0,",",".")."</li>";
            }
            ?>
            </ul>
            <p class="awal">Total awal : Rp <?= number_format($total,0,",",".") ?></p>

            <hr>
            <div class="total">
            <?php
            $diskon1 = 0.7;
            $diskon2 = 0.9;

            if ($total > 100000) {
                echo "KAMU MENDAPAT DISKON 30%";
                $total *= $diskon1;
            }
            else if ($total > 60000){
                $total *= $diskon2;
                echo "KAMU MENDAPAT DISKON 10%";
            }
            ?>
            <br>
            Total Bayar : Rp<?= number_format($total,0,",",".") ?>
            </div>
            <a href="home.php" type="button" class="home">HOME</a>
        </div>
    </nav>
   
</body>
</html>