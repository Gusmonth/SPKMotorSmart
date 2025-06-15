<?php
session_start();
include 'koneksi.php';
include 'base-url.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SPK SMART</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/logo/logo.png" sizes="64x64">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        a {
            text-decoration: none;
            color: black;
        }
        h2, h5 {
            color: black;
        }
        body {
            background-color: #fff;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="hitung.php">Coba SPK</a></li>
                                    <li><a href="index.php#motor">Sepeda Motor</a></li>
                                    <li><a href="index.php#hasil">Hasil</a></li>
                                    <li><a href="#">Brand</a></li>
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="login.php" id="loginBtn">Login</a>
                                    </div>

                                    <!-- Cart Button -->
                                    <div class="cart-btn">
                                        <p><span></span> <span></span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="bradcumbContent">
            <p>semua merek sepeda motor tersimpan</p>
            <h2>Merek Sepeda Motor</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

        <!-- ##### Miscellaneous Area Start ##### -->
        <section class="album-catagory section-padding-100-0" id="brand">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*" class="active">Merek</a>
                        <a href="#" data-filter=".kawasaki">Kawasaki</a>
                        <a href="#" data-filter=".tvs">TVS</a>
                        <a href="#" data-filter=".yamaha">Yamaha</a>
                        <a href="#" data-filter=".honda">Honda</a>
                        <a href="#" data-filter=".suzuki">Suzuki</a>
                        <a href="#" data-filter=".alva">Alva</a>
                        <a href="#" data-filter=".aprilia">Aprilia</a>
                        <a href="#" data-filter=".bajaj">Bajaj</a>
                        <a href="#" data-filter=".bmw">BMW</a>
                        <a href="#" data-filter=".cfmoto">CFMoto</a>
                        <a href="#" data-filter=".cleveland">Cleveland</a>
                        <a href="#" data-filter=".ducati">Ducati</a>
                        <a href="#" data-filter=".gesit">Gesits</a>
                        <a href="#" data-filter=".harley">Harley-Davidson</a>
                        <a href="#" data-filter=".indian">Indian</a>
                        <a href="#" data-filter=".kymco">Kymco</a>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM alternatif");
                while ($baris = mysqli_fetch_array($query)) {
                    $filter_class = strtolower($baris['nama_alternatif']); // Menyesuaikan dengan nama alternatif
                ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 single-album-item <?= $filter_class; ?>">
                    <div class="single-album" style="height: 240px; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden;">
                        <img src="img/<?= $baris['gambar']; ?>" alt="" style="height: 150px; width: 100%; object-fit: scale-down;">
                        <div class="album-info" style="flex-grow: 1; text-align: center;">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#view_data<?= $baris['id_alternatif']; ?>">
                                <h5><?= $baris['nama_alternatif']; ?></h5>
                            </a>
                            <p><?= $baris['kode_alternatif']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM alternatif");
                            while ($baris = mysqli_fetch_array($query)) {
                                $id = $baris['id_alternatif'];
                            ?>
                            <div class="modal fade" id="view_data<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Detail <?= $baris['nama_alternatif']; ?></h5>
                                            <button type="button" class="text-white btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $baris_sub = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_alternatif = '$id'"));
                                            $baris_detail = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM detail WHERE id_alternatif = '$id'"));
                                            ?>
                                            <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                <div class="text-center mb-3">
                                                        <img src="img/<?= $baris_sub['gambar']; ?>" alt="Gambar Alternatif" class="img-fluid rounded" style="width: 500px;">
                                                    </div>
                                                    <div class="col-md-4">
                                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                                        <label><strong>Kode Alternatif</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="kode">: <?= $baris_sub['kode_alternatif']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Nama Alternatif</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="nama">: <?= $baris_sub['nama_alternatif']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Harga</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="harga">: Rp. <?= $baris_detail['harga']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kapasitas CC</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="kapasitas">: <?= $baris_detail['kapasitas']; ?> CC</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Tenaga (HP)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="tenaga">: <?= $baris_detail['tenaga']; ?> HP</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Jenis Mesin</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="fitur">: <?= $baris_detail['fitur']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kategori</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="kategori">: <?= $baris_detail['kategori']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Jenis Transmisi</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="transmisi">: <?= $baris_detail['transmisi']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Opsi Starter</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="starter">: <?= $baris_detail['starter']; ?></h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Torsi Maks</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="torsi">: <?= $baris_detail['torsi']; ?> Nm</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kecepatan Maks</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="kecepatan">: <?= $baris_detail['kecepatan']; ?> km/h</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Berat Bobot (Kg)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="berat">: <?= $baris_detail['berat']; ?> Kg</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kapasitas Tangki</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="tangki">: <?= $baris_detail['tangki']; ?> Liter</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Konsumsi (BBM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="konsumsi">: <?= $baris_detail['konsumsi']; ?> Liter</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Torsi (RPM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="torsirpm">: <?= $baris_detail['torsirpm']; ?> RPM</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Tenaga (RPM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <h6 class="form-control-static" id="staticInput" name="tenagarpm">: <?= $baris_detail['tenagarpm']; ?> RPM</h6>
                                                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-dark me-auto" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none">Tutup</i>
                                            <span class="d-none d-sm-block text-dark">Tutup</span></button>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
    <!-- ##### Miscellaneous Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt="" style="width: 100px;"></a>
                    <p class="copywrite-text"><a href="#">
Universitas Negeri Manado;<script>document.write(new Date().getFullYear());</script> Teknik Informatika | Email: Gusmonth@gmail.com <i class="fa fa-heart-o" aria-hidden="true"></i> Update Harga: <a href="#" target="_blank">OKTOBER</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>