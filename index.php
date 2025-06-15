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
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="hitung.php">Mulai SPK</a></li>
                                    <li><a href="#motor">Sepeda Motor</a></li>
                                    <li><a href="#hasil">Hasil</a></li>
                                    <li><a href="merek.php">Brand</a></li>
                                </ul>

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

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area" id="home">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Selamat datang di aplikasi SPK Pemilihan Sepeda Motor</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">SMART <span>SMART</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="hitung.php" class="btn oneMusic-btn mt-50">Mulai SPK <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-3.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Selamat datang di aplikasi SPK Pemilihan Sepeda Motor</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">SMART <span>SMART</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="hitung.php" class="btn oneMusic-btn mt-50">Mulai SPK <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100" id="motor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>Rekomendasi</p>
                        <h2>Daftar Sepeda Motor</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p>Halaman ini menampilkan seluruh sepeda motor yang terdaftar pada sistem. Sepeda motor yang tersedia dapat dilihat secara detail dengan cara klik pada salah satu nama sepeda motor, 
                            selain itu harga dari masing masing sepeda motor mengikuti update terakhir dari website resmi brand sepeda motor, update terakhir dapat dilihat di bagian footer.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <?php
                        include 'koneksi.php';
                        $query = "SELECT * FROM alternatif";
                        $result = mysqli_query($koneksi, $query);

                        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        shuffle($rows);
                        
                        foreach ($rows as $row) {
                        ?>
                        <div class="single-album text-center">
                            <img src="img/<?php echo $row['gambar']; ?>" alt="" class="img-fluid" style="width: auto; height: 150px; display: block; margin: 0 auto;">
                            <div class="album-info">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#view_data<?php echo $row['id_alternatif']; ?>">
                                    <h5><?php echo $row['nama_alternatif']; ?></h5>
                                </a>
                                <p><?php echo $row['kode_alternatif']; ?></p>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

    <!-- ##### Featured Artist Area Start ##### -->
    <section id="hasil" class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-6.jpg);">
        <div class="container">
            <?php
            $query = mysqli_query($koneksi, "SELECT alternatif.nama_alternatif AS nama_alternatif FROM peringkat JOIN alternatif ON peringkat.id_alternatif = alternatif.id_alternatif ORDER BY peringkat.nilai_peringkat DESC LIMIT 1");
            $data_rekom = mysqli_fetch_array($query);
            ?>
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <?php
                        $query_img = mysqli_query($koneksi, "SELECT gambar FROM alternatif JOIN peringkat ON alternatif.id_alternatif = peringkat.id_alternatif ORDER BY peringkat.nilai_peringkat DESC LIMIT 1");
                        $data_img = mysqli_fetch_array($query_img);
                        ?>
                        <img src="img/<?php echo $data_img['gambar']; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        
                        <div class="section-heading white text-left mb-30">
                            <p>Riwayat hasil perankingan berdasarkan sistem</p>
                            <h2>Hasil Rekomendasi</h2>
                        </div>
                        <p>Berdasarkan hasil perhitungan Sistem Pendukung Keputusan dengan menggunakan metode SMART, didapatkan bahwa <span class="fw-bold">"<?= $data_rekom['nama_alternatif']; ?>"</span> adalah jenis Sepeda Motor yang paling direkomendasikan untuk anda.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                            <table id="table" class="table table-bordered white" width="100%">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th class="text-center text-white">No</th>
                                        <th class="text-center text-white">Kode Alternatif</th>
                                        <th class="text-center text-white">Nama Alternatif</th>
                                        <th class="text-center text-white">Peringkat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT alternatif.kode_alternatif AS kode, alternatif.nama_alternatif AS nama, peringkat.nilai_peringkat AS nilai FROM alternatif JOIN peringkat ON alternatif.id_alternatif = peringkat.id_alternatif ORDER BY peringkat.nilai_peringkat DESC");
                                    while ($baris = mysqli_fetch_array($query)) {
                                        echo "
                                            <tr>
                                                <td class='text-center text-white'>" . $no . "</td>
                                                <td class='text-center text-white'>" . $baris['kode'] . "</td>
                                                <td class='text-center text-white'>" . $baris['nama'] . "</td>
                                                <td class='text-center text-white'>" . $no . "</td>
                                            </tr>
                                            ";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

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
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>