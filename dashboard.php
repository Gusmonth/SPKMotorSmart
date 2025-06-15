<?php
session_start();
include 'koneksi.php';

$validasi = isset($_GET['validasi']) ? trim($_GET['validasi']) : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SPK SMART</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/x-icon">
</head>

<body>
        <?php
        include 'sidebar.php';
        ?>
        <div id="main" class='layout-navbar'>
            <?php
            include 'header.php';
            ?>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3><i class="bi bi-grid-fill"></i> Dashboard</h3>
                                <p class="text-subtitle text-muted">Pilih menu yang ingin anda akses.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Menu</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <?php
                            if ($validasi == "sukses") {
                                echo "
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    Selamat datang " . $_SESSION['level'] . "! Anda dapat menggunakan sistem dengan pilihan menu yang ada di bawah ini.
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                                ";
                            }
                            ?>
                <div class="page-content">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon cobalt" onclick="window.location.href='data-kriteria.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldFolder"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Data Kriteria</h6>
                                                <?php
                                                include 'koneksi.php';
                                                $query = "SELECT COUNT(*) as total FROM kriteria";
                                                $result = mysqli_query($koneksi, $query);
                                                $data = mysqli_fetch_assoc($result);
                                                ?>
                                                <h6 class="font-semibold mb-0"><?php echo $data['total']; ?></h6>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon orange" onclick="window.location.href='data-subkriteria.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldFilter"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="font-bold">Data Subkriteria</h6>
                                                <?php
                                                include 'koneksi.php';
                                                $query = "SELECT COUNT(*) as total FROM subkriteria";
                                                $result = mysqli_query($koneksi, $query);
                                                $data = mysqli_fetch_assoc($result);
                                                ?>
                                                <h6 class="font-semibold mb-0"><?php echo $data['total']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon yellow" onclick="window.location.href='data-alternatif.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldDocument"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Data Alternatif</h6>
                                                <?php
                                                include 'koneksi.php';
                                                $query = "SELECT COUNT(*) as total FROM alternatif";
                                                $result = mysqli_query($koneksi, $query);
                                                $data = mysqli_fetch_assoc($result);
                                                ?>
                                                <h6 class="font-semibold mb-0"><?php echo $data['total']; ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red" onclick="window.location.href='data-perhitungan.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldChart"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Data Perhitungan</h6>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple" onclick="window.location.href='data-profil.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Data Profil</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue" onclick="window.location.href='data-pengguna.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldSetting"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Data Pengguna</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green" id="logout" style="cursor: pointer;">
                                                    <i class="iconly-boldLogin"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Log Out</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red" onclick="window.location.href='dashboard.php'" style="cursor: pointer;">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="font-bold">Dashboard</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---END ROW 2-->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Jumlah Data Sepeda Motor</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-alternatif"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            <?php
                            include 'koneksi.php';
                            $sql1 = "SELECT COUNT(*) as jumlah FROM alternatif WHERE kode_alternatif LIKE 'H%'";
                            $sql2 = "SELECT COUNT(*) as jumlah FROM alternatif WHERE kode_alternatif LIKE 'K%'";
                            $sql3 = "SELECT COUNT(*) as jumlah FROM alternatif WHERE kode_alternatif LIKE 'Z%'";
                            $sql4 = "SELECT COUNT(*) as jumlah FROM alternatif WHERE kode_alternatif LIKE 'T%'";
                            $sql5 = "SELECT COUNT(*) as jumlah FROM alternatif WHERE kode_alternatif LIKE 'Y%'";

                            $result1 = mysqli_query($koneksi, $sql1);
                            $result2 = mysqli_query($koneksi, $sql2);
                            $result3 = mysqli_query($koneksi, $sql3);
                            $result4 = mysqli_query($koneksi, $sql4);
                            $result5 = mysqli_query($koneksi, $sql5);

                            $data1 = mysqli_fetch_assoc($result1);
                            $data2 = mysqli_fetch_assoc($result2);
                            $data3 = mysqli_fetch_assoc($result3);
                            $data4 = mysqli_fetch_assoc($result4);
                            $data5 = mysqli_fetch_assoc($result5);
                            ?>
                            document.addEventListener("DOMContentLoaded", function() {
                                var options = {
                                    series: [{
                                        name: 'Jumlah Data',
                                        data: [<?php echo isset($data1['jumlah']) ? $data1['jumlah'] : 0; ?>, <?php echo isset($data2['jumlah']) ? $data2['jumlah'] : 0; ?>, <?php echo isset($data3['jumlah']) ? $data3['jumlah'] : 0; ?>, <?php echo isset($data4['jumlah']) ? $data4['jumlah'] : 0; ?>, <?php echo isset($data5['jumlah']) ? $data5['jumlah'] : 0; ?>] 
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded'
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['transparent']
                                    },
                                    xaxis: {
                                        categories: ['Honda', 'Kawasaki', 'Suzuki', 'TVS', 'Yamaha'],
                                    },
                                    yaxis: {
                                        title: {
                                            text: 'Jumlah Data'
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function (val) {
                                                return val + " data"
                                            }
                                        }
                                    }
                                };

                                var chart = new ApexCharts(document.querySelector("#chart-alternatif"), options);
                                chart.render();
                            });
                        </script>
                        <!---END ROW 3-->
                    </div>
                </div>
            </div>

                </div>
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    <script>
    document.getElementById('logout').addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah link langsung redirect ke index.php
        
        // Menampilkan konfirmasi dengan SweetAlert
        Swal.fire({
            icon: "warning",
            title: "Logout?",
            text: "Apakah anda yakin ingin Keluar dari sistem?",
            showCancelButton: true, // Menampilkan tombol cancel
            confirmButtonText: 'Logout',
            cancelButtonText: 'Cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "index.php";
            }
        });
    });
    </script>
</body>

</html>