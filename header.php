<?php

if (!isset($_SESSION['nama']) && !isset($_SESSION['level'])) {
    header("Location: index.php");
    exit;
}
?>
    <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"><?php echo $_SESSION['nama']; ?></h6>
                                            <p class="mb-0 text-sm text-gray-600"><?php echo $_SESSION['level']; ?></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                            <?php
                                            $id = $_SESSION['id'];
                                            $baris = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE id_pengguna = '$id'"));
                                            $gambar = $baris['gambar'];
                                            ?>
                                                <img src="assets/images/faces/<?php echo $gambar ? $gambar : '1.jpg'; ?>" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 40px;">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?php echo $_SESSION['nama']; ?>!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="data-profil.php"><i class="icon-mid bi bi-person me-2"></i>Data Profil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="question" href="#">
                                            <i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

<script>
    document.getElementById('question').addEventListener('click', function (e) {
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