<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['nama']) && !isset($_SESSION['level'])) {
    header("Location: index.php");
    exit;
}

$validasi = isset($_GET['validasi']) ? trim($_GET['validasi']) : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Profil - SPK SMART</title>

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
                                <h3><i class="bi bi-person-fill"></i> Data Profil</h3>
                                <p class="text-subtitle text-muted">Data profil anda dapat dilihat dan diubah disini.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Profil
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <?php
                            if ($validasi == "sukses") {
                                echo "
                                    <div class='alert alert-success alert-dismissible fade show mb-3' role='alert'>
                                        Data Profil berhasil diperbarui!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                    ";
                            } else if ($validasi == "error") {
                                echo "
                                    <div class='alert alert-danger alert-dismissible fade show mb-3' role='alert'>
                                        Proses gagal!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                    ";
                            } else if ($validasi == "warning") {
                                echo "
                                    <div class='alert alert-warning alert-dismissible fade show mb-3' role='alert'>
                                        Username telah digunakan, Silahkan menggunakan username yang berbeda!
                                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>
                                    ";
                            }
                            ?>
                    <section class="section">
                    <div class="row match-height">
                        <div class="col-md-4 col-12">
                            <div class="card">
                            <?php
                            $id = $_SESSION['id'];
                            $baris = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id_pengguna = '$id'"));
                            $gambar = $baris['gambar'];
                            ?>
                                <div class="card-header">
                                    <h4 class="card-title"><?= $baris['nama']; ?></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        <img src="assets/images/faces/<?= $gambar ? $gambar : '1.jpg'; ?>" alt="Profile Picture" class="img-fluid" style="width: 300px; height: auto;">
                                                    </div>   
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="card">
                            <?php
                            $id = $_SESSION['id'];
                            $baris = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id_pengguna = '$id'"));
                            ?>
                                <div class="card-header">
                                    <h4 class="card-title">Data Profil</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Nama</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="hidden" name="id" value="<?= $id; ?>">
                                                                <h6 class="form-control-static" id="staticInput" name="nama"><i class="bi bi-person"></i> : <?= $baris['nama']; ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Username</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <h6 class="form-control-static" id="staticInput" name="username"><i class="bi bi-envelope"></i> : <?= $baris['username']; ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Level</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <h6 class="form-control-static" id="staticInput" name="level"><i class="bi bi-phone"></i> : <?= $baris['level']; ?></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <h6 class="form-control-static" id="staticInput" name="password"><i class="bi bi-lock"></i> : ********</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                                            Edit Profil
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editProfileModalLabel">Edit Profil</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="proses.php" method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $id; ?>">
                                                                    <div class="mb-3">
                                                                        <label for="edit-nama" class="form-label">Nama</label>
                                                                        <input type="text" class="form-control" id="edit-nama" name="nama" value="<?= $baris['nama']; ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="edit-username" class="form-label">Username</label>
                                                                        <input type="text" class="form-control" id="edit-username" name="username" value="<?= $baris['username']; ?>" readonly>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="edit-gambar" class="form-label">Gambar</label>
                                                                        <input type="file" class="form-control" id="edit-gambar" name="gambar">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="edit-password" class="form-label">Password Baru</label>
                                                                        <input type="password" class="form-control" id="edit-password" name="pass_new">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                                                                        <input type="password" class="form-control" id="confirm-password" name="konfir">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary" name="edit-profil">Simpan</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
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