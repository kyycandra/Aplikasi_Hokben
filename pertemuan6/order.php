<?php date_default_timezone_set('asia/jakarta'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="row text-center">
        <div class="col">
            <img src="logo.png" class="img-fluid mx-auto d-block" alt="...">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12 bg-light">
            <table>
                <tr>
                    <td>Atas Nama</td>
                    <td>: <?= $_POST['namaPelanggan']; ?></td>
                </tr>
                <tr>
                    <td>Waktu Transaksi</td>
                    <td>:<?= date('d M Y h:i:s') ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12 bg-light">
            <table>
                <tr>
                    <td>Nama Paket</td>
                    <td>: <?= $_POST['namaPaket']; ?></td>
                </tr>
                <tr>
                    <td>Harga Paket</td>
                    <td>: <?= $_POST['hargaPaket']; ?></td>
                </tr>
                <tr>
                    <td>jumlah pesanan</td>
                    <td>: <?= $_POST['jumlahPesanan']; ?></td>
                </tr>
                <tr>
                    <td>Harga Total</td>
                    <td>: <?= $_POST['hargaPaket']*$_POST['jumlahPesanan'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>