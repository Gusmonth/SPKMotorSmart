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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hasil</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

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
                                <h3><i class="bi bi-calculator-fill"></i> Data Hasil</h3>
                                <p class="text-subtitle text-muted">Hasil dari proses perhitungan.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="data-perhitungan.php">Data Perhitungan</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Hasil
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
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
                            <div class="card-header">
                                <h4 class="card-title">Hasil AKhir (Perangkingan)</h4>
                            </div>
                            <div class="card-body">
                                Berdasarkan hasil perhitungan Sistem Pendukung Keputusan dengan menggunakan metode SMART, 
                                didapatkan bahwa <span class="fw-bold">"<?= $data_rekom['nama_alternatif']; ?>"</span> adalah 
                                jenis Sepeda motor yang paling direkomendasikan untuk anda.
                            </div>
                            <div class="table-responsive" action="proses.php" method="post">
                                <table class="table table-bordered text-center" width="100%">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th class="text-center text-white">No.</th>
                                            <th class="text-center text-white">Kode Alternatif</th>
                                            <th class="text-center text-white">Nama Alternatif</th>
                                            <th class="text-center text-white">Gambar</th>
                                            <th class="text-center text-white">Nilai Akhir</th>
                                            <th class="text-center text-white">Peringkat</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT alternatif.kode_alternatif AS kode, alternatif.nama_alternatif AS nama, peringkat.nilai_peringkat AS nilai, alternatif.gambar AS gambar FROM alternatif JOIN peringkat ON alternatif.id_alternatif = peringkat.id_alternatif ORDER BY peringkat.nilai_peringkat DESC");
                                        $no = 1;
                                        while ($baris = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $no; ?></td>
                                                <td class="text-center"><?= $baris['kode']; ?></td>
                                                <td class="text-center"><?= $baris['nama']; ?></td>
                                                <td class="text-center"><img src="img/<?= $baris['gambar']; ?>" alt="<?= $baris['nama']; ?>" style="width: 75px; height: auto;"></td>
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
                            </div>
                        </div>
                    </section>
                </div>
                <?php include 'footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>