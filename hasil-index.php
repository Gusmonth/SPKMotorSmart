<?php
session_start();
include 'koneksi.php';

if (!isset($_GET['validasi'])) {
    header("Location: 404.php");
    exit;
} else {
    $validasi = $_GET['validasi'];
}
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
                                    <li><a href="index.php#brand">Brand</a></li>
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
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
        <div class="bradcumbContent">
            <h2>Hasil Keputusan Pilihan Sistem</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">

            <div class="row oneMusic-albums">

    </section>
    <!-- ##### Album Catagory Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-9.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                    <?php
                            if ($validasi == "sukses") {
                                echo "
                                    <div class='alert alert-success alert-dismissible fade show mb-3' role='alert'>
                                        Proses Perhitungan Berhasil!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                    ";
                            } else if ($validasi == "error") {
                                echo "
                                    <div class='alert alert-danger alert-dismissible fade show mb-3' role='alert'>
                                        Proses perhitungan gagal!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                    ";
                            }
                            ?>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT alternatif.nama_alternatif AS nama_alternatif FROM peringkat JOIN alternatif ON peringkat.id_alternatif = alternatif.id_alternatif ORDER BY peringkat.nilai_peringkat DESC LIMIT 1");
                            $data_rekom = mysqli_fetch_array($query);
                            ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-heading white">
                                        <p class="text-white" style="font-size: 1.3em;">Berdasarkan hasil perhitungan Sistem Pendukung Keputusan dengan menggunakan metode SMART, 
                                        didapatkan bahwa <span class='fw-bold'>"<?= $data_rekom['nama_alternatif']; ?>"</span> adalah 
                                        jenis Sepeda motor yang paling direkomendasikan untuk anda berdasarkan kriteria yang di pilih.</p>
                                        <h2></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form class="table-responsive" action="proses.php" method="post">
                                <table class="table table-bordered text-center" width="100%">
                                    <thead class="" style="font-size: 1.3em;">
                                        <tr>
                                            <th class="text-center text-white">Kode Alternatif</th>
                                            <th class="text-center text-white">Nama Alternatif</th>
                                            <th class="text-center text-white">Gambar</th>
                                            <th class="text-center text-white">Nilai Akhir</th>
                                            <th class="text-center text-white">Peringkat</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center text-white" style="font-size: 1.3em;">
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT alternatif.kode_alternatif AS kode, alternatif.nama_alternatif AS nama, peringkat.nilai_peringkat AS nilai, alternatif.gambar AS gambar FROM alternatif JOIN peringkat ON alternatif.id_alternatif = peringkat.id_alternatif ORDER BY peringkat.nilai_peringkat DESC");
                                        $no = 1;
                                        while ($baris = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $baris['kode']; ?></td>
                                                <td class="text-center"><?= $baris['nama']; ?></td>
                                                <td class="text-center"><img src="img/<?= $baris['gambar']; ?>" alt="<?= $baris['nama']; ?>" style="width: 100px; height: auto;"></td>
                                                <td class="text-center"><?= $baris['nilai']; ?></td>
                                                <td class="text-center"><?= $no; ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="print.php?validasi=sukses" class="btn btn-success">Print hasil</a>
                                </div>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt="" style="width: 100px;"></a>
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Universitas Negeri Manado;<script>document.write(new Date().getFullYear());</script> Teknik Informatika | Email: Gusmonth@gmail.com <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Gusmon Jama</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
    <script>
        function toggleCheckboxes(source) {
            checkboxes = document.getElementsByName('pilih[]');
            for(var i=0, n=checkboxes.length;i<n;i++) {
                                                checkboxes[i].checked = source.checked;
                                            }
                                        }

                                        document.getElementById('searchBar').addEventListener('keyup', function() {
                                            var searchValue = this.value.toLowerCase();
                                            var rows = document.querySelectorAll('#table1 tbody tr');
                                            rows.forEach(function(row) {
                                                var kodeAlternatif = row.cells[1].textContent.toLowerCase();
                                                var namaAlternatif = row.cells[2].textContent.toLowerCase();
                                                if (kodeAlternatif.includes(searchValue) || namaAlternatif.includes(searchValue)) {
                                                    row.style.display = '';
                                                } else {
                                                    row.style.display = 'none';
                                                }
                                            });
                                        });

                                        document.getElementById('entries').addEventListener('change', function() {
                                            var entries = parseInt(this.value);
                                            var rows = document.querySelectorAll('#table1 tbody tr');
                                            rows.forEach(function(row, index) {
                                                if (index < entries) {
                                                    row.style.display = '';
                                                } else {
                                                    row.style.display = 'none';
                                                }
                                            });
                                        });

                                        // Trigger the change event to set the initial state
                                        document.getElementById('entries').dispatchEvent(new Event('change'));
                                    </script>
</body>

</html>