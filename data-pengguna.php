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
    <title>Data Pengguna - SPK SMART</title>

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
                                <h3><i class="bi bi-people-fill"></i> Data Pengguna</h3>
                                <p class="text-subtitle text-muted">Data pengguna dapat ditambahkan dan dihapus disini.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
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
                                    Data Pengguna berhasil ditambahkan!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "sukses-perbarui") {
                            echo "
                                <div class='alert alert-success alert-dismissible show fade mb-3' role='alert'>
                                    Data Pengguna berhasil diperbarui!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "sukses-hapus") {
                            echo "
                                <div class='alert alert-success alert-dismissible show fade mb-3' role='alert'>
                                    Data Pengguna berhasil dihapus!
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
                                    Username telah digunakan, Silahkan menggunakan username yang berbeda!
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
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Tambah Data Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form class="form form-horizontal" action="proses.php" method="post">
                                        <div class="form-body">
                                        <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="nama" placeholder="Nama Lengkap" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="user" placeholder="Username" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Level</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="level" value="Admin" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="contact-info" class="form-control" name="pass" placeholder="Password" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Konfirmasi Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="contact-info" class="form-control" name="konfir" placeholder="Konfirmasi Password" required autocomplete="off">
                                                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tutup</span></button>
                                            <button name="tambah-pengguna" type="submit" class="btn btn-success ml-1"><i class="bx bx-check d-block d-sm-none"></i>
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
                                        <th class="text-center text-white">Nama Lengkap</th>
                                        <th class="text-center text-white">Username</th>
                                        <th class="text-center text-white">Level</th>
                                        <th class="text-center text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM user");
                                        $no = 1;
                                        while ($baris = mysqli_fetch_array($query)) { echo "
                                            <tr>
                                                <td class='text-center'>" . $no . "</td>
                                                <td class='text-center'>" . $baris['nama'] . "</td>
                                                <td class='text-center'>" . $baris['username'] . "</td>
                                                <td class='text-center'>" . $baris['level'] . "</td>
                                                <td class='text-center'>
                                                    <div class='d-flex justify-content-center'>
                                                        <a class='btn btn-outline-warning me-2' data-bs-toggle='modal' data-bs-target='#edit_data" .$baris['id_pengguna'] . "'><i class='bi bi-pencil-fill'></i></a>
                                                        <a class='btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#hapus_data" . $baris['id_pengguna'] . "'><i class='bi bi-trash-fill'></i></a>
                                                    </div>
                                                </td>
                                            </tr> ";
                                            $no++;
                                        }
                                        ?>
                                </tbody>
                            </table>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM user");
                            while ($baris = mysqli_fetch_array($query)) {
                                $id = $baris['id_pengguna'];
                            ?>
                            <div class="modal fade" id="edit_data<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="bg-dark modal-header">
                                            <h5 class="text-white modal-title" id="exampleModalCenterTitle">Edit Data Pengguna</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            $baris = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id_pengguna = '$id'"));
                                            ?>
                                            <form class="form form-horizontal" action="proses.php" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input type="hidden" name="id" value="<?= $id; ?>">
                                                        <label>Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $baris['nama']; ?>" required autocomplete="off">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="user" placeholder="Username" value="<?= $baris['username']; ?>" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Level</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="level" value="<?= $baris['level']; ?>" readonly>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="password" id="contact-info" class="form-control" name="pass" placeholder="Password" required autocomplete="off">
                                                </div>    
                                                <div class="col-md-4">
                                                        <label>Konfirmasi Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="contact-info" class="form-control" name="konfir" placeholder="Konfirmasi Password" required autocomplete="off">
                                                    </div>
                                                    </select>
                                                </div>    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal"><i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tutup</span></button>
                                            <button name="edit-pengguna" type="submit" class="btn btn-warning ml-1"><i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Tambah</span></button>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal fade" id="hapus_data<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <a href="hapus-data-pengguna.php?id=<?= $id; ?>" class="btn btn-danger">Hapus</a> 
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
