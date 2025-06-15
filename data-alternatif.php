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
    <title>Data Alternatif</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

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
                                <h3><i class="bi bi-file-earmark-spreadsheet-fill"></i> Data Alternatif</h3>
                                <p class="text-subtitle text-muted">Daftar Data Sepeda Motor yang Tersimpan.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Menu</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                    <div class="card">
                        <div class="card-header">
                        <?php
                        if ($validasi == "sukses-tambah") {
                            echo "
                                <div class='alert alert-success alert-dismissible show fade mb-3' role='alert'>
                                    Data Kriteria berhasil ditambahkan!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "sukses-perbarui") {
                            echo "
                                <div class='alert alert-success alert-dismissible show fade mb-3' role='alert'>
                                    Data Kriteria berhasil diperbarui!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "sukses-hapus") {
                            echo "
                                <div class='alert alert-success alert-dismissible show fade mb-3' role='alert'>
                                    Data Kriteria berhasil dihapus!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "error") {
                            echo "
                                <div class='alert alert-danger alert-dismissible show fade mb-3' role='alert'>
                                    Proses gagal!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "warning") {
                            echo "
                                <div class='alert alert-warning alert-dismissible fade show mb-3' role='alert'>
                                    Kode kriteria telah digunakan, Silahkan gunakan kode kriteria yang berbeda!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        }
                        ?>
                            <a class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="bi bi-plus"></i> Tambah data</a>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Tambah Data Alternatif</h5>
                                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form form-horizontal" action="proses.php" method="post" enctype="multipart/form-data">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label><strong>Kode Alternatif</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="kode" placeholder="Kode Alternatif" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Nama Alternatif</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="nama" placeholder="Nama Kriteria" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Gambar</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input name="gambar" class="form-control" type="file" id="inputGambar" accept="image/*" required >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Harga</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="harga" placeholder="Harga Alternatif" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kapasitas CC</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="kapasitas" placeholder="Kapasitas CC" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Tenaga (HP)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="tenaga" placeholder="Tenaga Horse Power" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Jenis Mesin</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="fitur" placeholder="Jenis Mesin" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kategori</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <select name="kategori" class="form-select" id="basicSelect" required>
                                                            <option value="" disabled selected>Pilih Kategori</option>
                                                            <option value="Sport">Sport</option>
                                                            <option value="Scooter">Scooter</option>
                                                            <option value="Moped-Cub">Moped-Cub</option>
                                                            <option value="Retro-Streetbike">Retro-Streetbike</option>
                                                            <option value="Touring">Touring</option>
                                                            <option value="Cruiser">Cruiser</option>
                                                            <option value="Trail-OffRoad">Trail-OffRoad</option>
                                                            <option value="Naked-Streetfighter">Naked-Streetfighter</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Jenis Transmisi</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <select name="transmisi" class="form-select" id="basicSelect" required>
                                                        <option value="" disabled selected>Pilih Jenis Transmisi</option>
                                                        <option value="Automatic">Automatic</option>
                                                        <option value="Manual">Manual</option>
                                                    </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Opsi Starter</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                    <select name="starter" class="form-select" id="basicSelect" required>
                                                        <option value="" disabled selected>Pilih Opsi Starter</option>
                                                        <option value="Electric Starter">Electric Starter</option>
                                                        <option value="Kick Starter">Kick Starter</option>
                                                        <option value="Combined Starter">Combined Starter</option>
                                                    </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Torsi Maks</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="torsi" id="contact-info" class="form-control" name="torsi" placeholder="Torsi Maks" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kecepatan Maks</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="kecepatan" placeholder="Kecepatan Maks" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Berat Bobot (Kg)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="berat" placeholder="Berat Bobot (Kg)" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kapasitas Tangki</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="tangki" placeholder="Kapasitas Tangki (Liter)" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Konsumsi (BBM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="konsumsi" placeholder="Konsumsi (BBM)" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Torsi (RPM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="torsirpm" placeholder="Torsi (RPM)" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Tenaga (RPM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="tenagarpm" placeholder="Tenaga (RPM)" required autocomplete="off">
                                                    </div>
                                                    <?php
                                                    $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
                                                    while ($baris = mysqli_fetch_array($query)) {
                                                    $id_kriteria = $baris['id_kriteria'];
                                                    ?>
                                                    <div class="col-md-4">
                                                        <label for="kriteria"><strong><?= $baris['nama_kriteria']; ?></strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="hidden" name="kriteria[]" value="<?= $id_kriteria; ?>">
                                                        <select name="subkriteria[]" class="form-select" id="kriteria" required>
                                                            <option value="" disabled selected>Pilih</option>
                                                            <?php
                                                            $select = mysqli_query($koneksi, "SELECT * FROM subkriteria WHERE id_kriteria = '$id_kriteria'");
                                                            while ($option = mysqli_fetch_array($select)) {
                                                                echo "
                                                                <option value='" . $option['id_subkriteria'] . "'>" . $option['nama_subkriteria'] . "</option>
                                                                ";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>    
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Tutup</span></button>
                                                <button name="tambah-alternatif" type="submit" class="btn btn-success ml-1"><i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Tambah</span></button>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th class="text-center text-white">No.</th>
                                        <th class="text-center text-white">Kode Alternatif</th>
                                        <th class="text-center text-white">Nama Alternatif</th>
                                        <th class="text-center text-white">Gambar</th>
                                        <th class="text-center text-white">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM alternatif ORDER BY kode_alternatif ASC");
                                        $no = 1;
                                        while ($baris = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?= $no; ?></td>
                                            <td class="text-center"><?= $baris['kode_alternatif']; ?></td>
                                            <td class="text-center"><?= $baris['nama_alternatif']; ?></td>
                                            <td class="text-center">
                                            <img src="img/<?= $baris['gambar']; ?>" alt="Gambar Alternatif" style="width: auto; height: 100px;">
                                            </td>
                                            <td class="text-center">
                                                <div class='d-flex justify-content-center'>
                                                    <a class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#view_data<?= $baris['id_alternatif']; ?>"><i class="bi bi-eye-fill"></i></a>
                                                    <a class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#edit_data<?= $baris['id_alternatif']; ?>"><i class="bi bi-pencil-fill"></i></a>
                                                    <a class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapus_data<?= $baris['id_alternatif']; ?>"><i class="bi bi-trash-fill"></i></a>
                                                </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                </tbody>
                            </table>
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
                                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">X</button>
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
                                                        <p class="form-control-static" id="staticInput" name="kode">: <?= $baris_sub['kode_alternatif']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Nama Alternatif</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="nama">: <?= $baris_sub['nama_alternatif']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Harga</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="harga">: Rp. <?= $baris_detail['harga']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kapasitas CC</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="kapasitas">: <?= $baris_detail['kapasitas']; ?> CC</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Tenaga (HP)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="tenaga">: <?= $baris_detail['tenaga']; ?> HP</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Jenis Mesin</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="fitur">: <?= $baris_detail['fitur']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kategori</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="kategori">: <?= $baris_detail['kategori']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Jenis Transmisi</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="transmisi">: <?= $baris_detail['transmisi']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Opsi Starter</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="starter">: <?= $baris_detail['starter']; ?></p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Torsi Maks</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="torsi">: <?= $baris_detail['torsi']; ?> Nm</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kecepatan Maks</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="kecepatan">: <?= $baris_detail['kecepatan']; ?> km/h</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Berat Bobot (Kg)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="berat">: <?= $baris_detail['berat']; ?> Kg</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Kapasitas Tangki</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="tangki">: <?= $baris_detail['tangki']; ?> Liter</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Konsumsi (BBM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="konsumsi">: <?= $baris_detail['konsumsi']; ?> Liter</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Torsi (RPM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="torsirpm">: <?= $baris_detail['torsirpm']; ?> RPM</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Tenaga (RPM)</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <p class="form-control-static" id="staticInput" name="tenagarpm">: <?= $baris_detail['tenagarpm']; ?> RPM</p>
                                                    </div>
                                                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tutup</span></button>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="edit_data<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Edit Data Alternatif</h5>
                                            <button type="button" class="text-white btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form form-horizontal" action="proses.php" method="post" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="row">
                                                    <?php
                                                    $baris_sub = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM alternatif WHERE id_alternatif = '$id'"));
                                                    $baris_detail = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM detail WHERE id_alternatif = '$id'"));
                                                    ?>
                                                        <input type="hidden" name="id" value="<?= $baris_sub['id_alternatif']; ?>">
                                                        <div class="col-md-4">
                                                            <label>Kode Alternatif</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" class="form-control" name="kode" value="<?= $baris_sub['kode_alternatif']; ?>" readonly>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Nama Alternatif</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" class="form-control" name="nama" value="<?= $baris_sub['nama_alternatif']; ?>" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Gambar</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="file" class="form-control" name="gambar">
                                                            <input type="hidden" name="gambar" value="<?= $baris_sub['gambar']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Harga</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" class="form-control" name="harga" value="<?= $baris_detail['harga']; ?>" required>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Kapasitas CC</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="kapasitas" value="<?= $baris_detail['kapasitas']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Tenaga (HP)</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="tenaga" value="<?= $baris_detail['tenaga']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Jenis Mesin</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="text" id="contact-info" class="form-control" name="fitur" value="<?= $baris_detail['fitur']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Kategori</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select id="contact-info" class="form-control" name="kategori">
                                                                <option value="Sport" <?= $baris_detail['kategori'] == 'Sport' ? 'selected' : ''; ?>>Sport</option>
                                                                <option value="Scooter" <?= $baris_detail['kategori'] == 'Scooter' ? 'selected' : ''; ?>>Scooter</option>
                                                                <option value="Moped-Cub" <?= $baris_detail['kategori'] == 'Moped-Cub' ? 'selected' : ''; ?>>Moped-Cub</option>
                                                                <option value="Retro-Streetbike" <?= $baris_detail['kategori'] == 'Retro-Streetbike' ? 'selected' : ''; ?>>Retro-Streetbike</option>
                                                                <option value="Touring" <?= $baris_detail['kategori'] == 'Touring' ? 'selected' : ''; ?>>Touring</option>
                                                                <option value="Cruiser" <?= $baris_detail['kategori'] == 'Cruiser' ? 'selected' : ''; ?>>Cruiser</option>
                                                                <option value="Trail-OffRoad" <?= $baris_detail['kategori'] == 'Trail-OffRoad' ? 'selected' : ''; ?>>Trail-OffRoad</option>
                                                                <option value="Naked-Streetfighter" <?= $baris_detail['kategori'] == 'Naked-Streetfighter' ? 'selected' : ''; ?>>Naked-Streetfighter</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Jenis Transmisi</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select id="contact-info" class="form-control" name="transmisi">
                                                                <option value="Automatic" <?= $baris_detail['transmisi'] == 'Automatic' ? 'selected' : ''; ?>>Automatic</option>
                                                                <option value="Manual" <?= $baris_detail['transmisi'] == 'Manual' ? 'selected' : ''; ?>>Manual</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Opsi Starter</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <select id="contact-info" class="form-control" name="starter">
                                                                <option value="Electric Starter" <?= $baris_detail['starter'] == 'Electric Starter' ? 'selected' : ''; ?>>Electric Starter</option>
                                                                <option value="Kick Starter" <?= $baris_detail['starter'] == 'Kick Starter' ? 'selected' : ''; ?>>Kick Starter</option>
                                                                <option value="Combined Starter" <?= $baris_detail['starter'] == 'Combined Starter' ? 'selected' : ''; ?>>Combined Starter</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Torsi Maks</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="torsi" value="<?= $baris_detail['torsi']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Kecepatan Maks</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="kecepatan" value="<?= $baris_detail['kecepatan']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Berat Bobot (Kg)</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="berat" value="<?= $baris_detail['berat']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Kapasitas Tangki</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="tangki" value="<?= $baris_detail['tangki']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Konsumsi (BBM)</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="konsumsi" value="<?= $baris_detail['konsumsi']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Torsi (RPM)</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="torsirpm" value="<?= $baris_detail['torsirpm']; ?>">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label><strong>Tenaga (RPM)</strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="number" id="contact-info" class="form-control" name="tenagarpm" value="<?= $baris_detail['tenagarpm']; ?>">
                                                        </div>
                                                        <?php
                                                    $query_sub = mysqli_query($koneksi, "SELECT * FROM kriteria");
                                                    $matriks = mysqli_query($koneksi, "SELECT * FROM matriks WHERE id_alternatif = '$id'");
                                                    while ($baris_sub = mysqli_fetch_array($query_sub)) {
                                                        $selected = mysqli_fetch_array($matriks);
                                                        $id_sub = isset($selected['id_subkriteria']) ? trim($selected['id_subkriteria']) : "";
                                                    ?>
                                                        <div class="col-md-4">
                                                            <label for="kriteria"><strong><?= $baris_sub['nama_kriteria']; ?></strong></label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                            <input type="hidden" name="kriteria[]" value="<?= $baris_sub['id_kriteria']; ?>">
                                                            <select name="subkriteria[]" class="form-select" id="kriteria" required>
                                                                <option value="" disabled>Pilih</option>
                                                                <?php
                                                                $select = mysqli_query($koneksi, "SELECT * FROM subkriteria WHERE id_kriteria = '" . $baris_sub['id_kriteria'] . "'");
                                                                while ($option = mysqli_fetch_array($select)) {
                                                                    $selected_option = $option['id_subkriteria'] == $id_sub ? 'selected' : '';
                                                                    echo "
                                                                    <option value='" . $option['id_subkriteria'] . "' $selected_option>" . $option['nama_subkriteria'] . "</option>
                                                                    ";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Tutup</span></button>
                                                        <button name="edit-alternatif" type="submit" class="btn btn-warning ml-1"><i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Simpan</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="hapus_data<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Hapus Data Alternatif</h5>
                                            <button type="button" class="text-white btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form form-horizontal" action="proses.php" method="post">
                                            <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus kriteria yang dipilih?</p>
                                                </div>
                                        <div class="modal-footer">
                                        <a class="btn btn-secondary" data-bs-dismiss="modal">Tidak</a>
                                        <a href="hapus-data-alternatif.php?id=<?= $id; ?>" class="btn btn-danger">Hapus</a> 
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
                            </div>
                            </div>
                            </div>                        
                        </div>
                    </section>
                    <?php include 'footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>
