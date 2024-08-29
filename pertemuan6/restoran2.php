<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- start nav -->
    <div class="container mb-1">
        <div class="row">
            <div class="col">
                <nav class="navbar fixed-top">
                    <div class="container-fluid">
                        <img src="logo2.png" alt="" style="width: 60px;">
                        <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pesan</a>
                                    </li>
                                </ul>
                                <form class="d-flex mt-3" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- end nav -->

    <!-- start carousel-->
    <div class="container">
        <div class="row">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="logo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="logo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="logo.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- end carousel-->

        <hr class="mt-3">

        <div class="row">
            <?php
            $menupakets =
                [
                    [
                        'kode'          => 'p1',
                        'nama_paket'    => 'paket 1',
                        'isi_paket'     => 'Rice, <br>
                                        Salad, <br>
                                        Beef Yakiniku, <br>
                                        2 pcs Shrimp Roll, <br>
                                        1 pc Tori Ball *Salad for dine in only.',
                        'harga_paket'   => 56500,
                        'gambar'        => 'paketa.png'
                    ],
                    [
                        'kode'          => 'p2',
                        'nama_paket'    => 'paket 2',
                        'isi_paket'     => 'Rice, <br>
                                        Salad, <br>
                                        Chicken Yakiniku, <br>
                                        2 pcs Egg Chicken Roll, <br>
                                        1 pc Ebi Furai *Salad for dine in only.',
                        'harga_paket'   => 50000,
                        'gambar'        => 'paketb.png'
                    ],
                    [
                        'kode'          => 'p3',
                        'nama_paket'    => 'paket 3',
                        'isi_paket'     => 'Rice,<br>  
                                        Salad,<br> 
                                        Beef Triyaki,<br> 
                                        2 pcs Shrimp Roll,<br> 
                                        1 pc Tori Ball *Salad for dine in only.',
                        'harga_paket'   => 56500,
                        'gambar'        => 'paketc.png'
                    ],
                    [
                        'kode'          => 'p4',
                        'nama_paket'    => 'paket 4',
                        'isi_paket'     => 'Rice,<br> 
                                        Salad,<br> 
                                        Chicken Teriyaki,<br> 
                                        2 pcs Egg Chicken Roll,<br> 
                                        1 pc Ebi Furai *Salad for dine in only.',
                        'harga_paket'   => 50000,
                        'gambar'        => 'paketd.png'
                    ],
                ];
            foreach ($menupakets as $data) {
            ?>
                <div class="col">
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="<?php echo $data['gambar'] ?>" alt="....">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama_paket'] ?></h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['kode'] ?>">
                                Detail Paket
                            </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $data['kode'] ?>">
                            Pesan Sekarang
</button>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
<div class="modal fade" id="exampleModal2<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lengkapi Data Pesanan
                                            <?php echo $data['nama_paket'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="order.php" method="post"
                                            id="pesanForm<?php echo $data['kode'] ?>" target="_blank">
                                            <div class="form-group">
                                                <label for="namaPelanggan<?php echo $data['kode'] ?>" required>Nama Pelanggan</label>
                                                <input type="text" id="namaPelanggan<?php echo $data['kode'] ?>"
                                                    name="namaPelanggan" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlahPesanan<?php echo $data['kode'] ?>" required>Jumlah Pesanan</label>
                                                <input type="number" id="jumlahPesanan<?php echo $data['kode'] ?>"
                                                    name="jumlahPesanan" class="form-control" required>
                                            </div>
                                            <input type="hidden" name="kodePaket" value="<?php echo $data['kode'] ?>">
                                            <input type="hidden" name="hargaPaket"
                                                value="<?php echo $data['harga_paket'] ?>">
                                            <input type="hidden" name="namaPaket" value="<?php echo $data['nama_paket'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Pesan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail <?php echo $data['nama_paket'] ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="order.php" method="post">
                                <input type="hidden" name="kode_paket" value="<?php echo $data['kode']?>">
                                    <?php
                                
                                    echo '<b>Composition :<br></b>';
                                    echo $data['nama_paket'] . '<br>';
                                    echo $data['isi_paket'] . '<br>';
                                    echo '<b>Harga : Rp. ' . $data['harga_paket'] . '</b><br>';
                                    ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2<?php echo $data['kode'] ?>">
                            Pesan Sekarang
</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal Pesan-->
                    <div class="modal fade" id="exampleModal1<?php echo $data['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lengkapi Data Pesanan
                                            <?php echo $data['nama_paket'] ?></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="order.php" method="post"
                                            id="pesanForm<?php echo $data['kode'] ?>" target="_blank">
                                            <div class="form-group">
                                                <label for="namaPelanggan<?php echo $data['kode'] ?>" required>Nama Pelanggan</label>
                                                <input type="text" id="namaPelanggan<?php echo $data['kode'] ?>"
                                                    name="namaPelanggan" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlahPesanan<?php echo $data['kode'] ?>" required>Jumlah Pesanan</label>
                                                <input type="number" id="jumlahPesanan<?php echo $data['kode'] ?>"
                                                    name="jumlahPesanan" class="form-control" required>
                                            </div>
                                            <input type="hidden" name="kodePaket" value="<?php echo $data['kode'] ?>">
                                            <input type="hidden" name="hargaPaket"
                                                value="<?php echo $data['harga_paket'] ?>">
                                            <input type="hidden" name="namaPaket" value="<?php echo $data['nama_paket'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Pesan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->

                </div>
            <?php } ?>
        </div>
        <!-- footer -->
        <div class="row">
            <img src="hokbendelivery.png" alt="" style="width: 150px; ">
            <h6 class="text-center mt-5">All images and materials are copyright protected and are the property of PT. Eka Bogainti. Unauthorized use and/or duplication of these images and materials without written permission is against the law.</h6>
            <img class="mb-4" src="bwh.png" alt="">
            <div class="col bg-warning text-center text-danger fixed-bottom pt-2 pb-2 mt-3">
                Copyright &copy; Dicky Candra Ramadhan - 2024
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>