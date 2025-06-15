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
    <title>Data Subkriteria</title>

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
                                <h3><i class="bi bi-bar-chart-fill"></i> Data Subkriteria</h3>
                                <p class="text-subtitle text-muted">Daftar Data Subkriteria yang Tersimpan.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Menu</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Subkriteria</li>
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

                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM kriteria");
                        while ($baris = mysqli_fetch_array($query)) {
                        $id = $baris['id_kriteria'];
                        ?>

                            <a class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModalCenter<?= $id; ?>"><i class="bi bi-plus"></i> Tambah data</a>
                            <h4 class="mt-2"><?= $baris['nama_kriteria'] . " (" . $baris['kode_kriteria'] . ")" ?></h4>
                            <div class="modal fade" id="exampleModalCenter<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Tambah Data SubKriteria</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form form-horizontal" action="proses.php" method="post">
                                        <div class="form-body">
                                        <div class="row">
                                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                                    <div class="col-md-4">
                                                        <label><strong>Nama Subkriteria</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="nama" placeholder="Nama SubKriteria" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Nilai Subkriteria</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="nilai" placeholder="Nilai Subkriteria" required autocomplete="off">
                                                    </div>   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tutup</span></button>
                                            <button name="tambah-subkriteria" type="submit" class="btn btn-success ml-1"><i class="bx bx-check d-block d-sm-none"></i>
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
                                        <th class="text-center text-white">Nama Subkriteria</th>
                                        <th class="text-center text-white">Nilai</th>
                                        <th class="text-center text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $query_sub = mysqli_query($koneksi, "SELECT * FROM subkriteria WHERE id_kriteria = '$id'");
                                            $no = 1;
                                            while ($baris_sub = mysqli_fetch_array($query_sub)) { echo "
                                            <tr>
                                                        <td class='text-center'>" . $no . "</td>
                                                        <td class='text-center'>" . $baris_sub['nama_subkriteria'] . "</td>
                                                        <td class='text-center'>" . $baris_sub['nilai_subkriteria'] . "</td>
                                                        <td class='text-center'>
                                                            <div class='d-flex justify-content-center'>
                                                                <a class='btn btn-outline-warning me-2' data-bs-toggle='modal' data-bs-target='#edit_data" . $baris_sub['id_subkriteria'] . "'><i class='bi bi-pencil-fill'></i></a>
                                                                <a class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#hapus_data" . $baris_sub['id_subkriteria'] . "" . $baris_sub['id_kriteria'] . "'><i class='bi bi-trash'></i></a>
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                    ";
                                            $no++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                                $query_sub = mysqli_query($koneksi, "SELECT * FROM subkriteria WHERE id_kriteria = '$id'");
                                while ($baris_sub = mysqli_fetch_array($query_sub)) {
                                $id_sub = $baris_sub['id_subkriteria'];
                                $id_krit = $baris_sub['id_kriteria'];
                            ?>
                            <div class="modal fade" id="edit_data<?= $id_sub; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Edit Data SubKriteria</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form form-horizontal" action="proses.php" method="post">
                                            <?php
                                            $baris_sub = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM subkriteria WHERE id_subkriteria = '$id_sub'"));
                                            ?>
                                        <div class="form-body">
                                        <div class="row">
                                                    <input type="hidden" name="id" value="<?= $id_sub; ?>">
                                                    <div class="col-md-4">
                                                        <label><strong>Nama Subkriteria</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="nama" placeholder="Nama SubKriteria" value="<?= $baris_sub['nama_subkriteria']; ?>" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label><strong>Nilai Subkriteria</strong></label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control" name="nilai" placeholder="Nilai Subkriteria" value="<?= $baris_sub['nilai_subkriteria']; ?>" required autocomplete="off">
                                                    </div>   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tutup</span></button>
                                            <button name="edit-subkriteria" type="submit" class="btn btn-warning ml-1"><i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="text-dark d-none d-sm-block">Edit</span></button>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="hapus_data<?= $id_sub; ?><?= $id_krit; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Hapus Data Kriteria</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form form-horizontal" action="proses.php" method="post">
                                            <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus kriteria yang dipilih?</p>
                                                </div>
                                        <div class="modal-footer">
                                        <a class="btn btn-secondary" data-bs-dismiss="modal">Tidak</a>
                                        <a href="hapus-data-subkriteria.php?id_subkriteria=<?= $id_sub; ?>&id_kriteria=<?= $id_krit; ?>" class="btn btn-danger">Hapus</a> 
                                        </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                                }
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
