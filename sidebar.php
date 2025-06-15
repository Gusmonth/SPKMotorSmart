        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">

                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="Logo" style="height: 125px;" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block" onclick="toggleSidebar()"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
                            <a href="dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'data-kriteria.php') ? 'active' : ''; ?>">
                            <a href="data-kriteria.php" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Data Kriteria</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'data-subkriteria.php') ? 'active' : ''; ?>">
                            <a href="data-subkriteria.php" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Data Subkriteria</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'data-alternatif.php') ? 'active' : ''; ?>">
                            <a href="data-alternatif.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Data Alternatif</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'data-Perhitungan.php') ? 'active' : ''; ?>">
                            <a href="data-perhitungan.php" class='sidebar-link'>
                                <i class="bi bi-calculator-fill"></i>
                                <span>Data Perhitungan</span>
                            </a>
                        </li>
                        <li class="sidebar-title">Pengguna</li>

                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'data-profil.php') ? 'active' : ''; ?>">
                            <a href="data-profil.php" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Data Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'data-pengguna.php') ? 'active' : ''; ?>">
                            <a href="data-pengguna.php" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>Data Pengguna</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                            <a href="index.php" class='sidebar-link' id="logout-link">
                                <i class="bi bi-door-closed-fill"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

    <script>
    // Ambil elemen 'logout-link' dan tambahkan event listener
    document.getElementById('logout-link').addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah link langsung menuju index.php
        
        // Tampilkan konfirmasi SweetAlert
        Swal.fire({
            icon: "warning",
            title: "Logout?",
            text: "Apakah anda yakin ingin Keluar dari sistem?",
            showCancelButton: true, // Tampilkan tombol Cancel
            confirmButtonText: 'Logout', // Teks tombol "Yes"
            cancelButtonText: 'Cancel' // Teks tombol "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna menekan "Yes", redirect ke halaman logout (index.php)
                window.location.href = "index.php";
            }
        });
    });
    </script>

    <script src="assets/js/extensions/sweetalert2.js"></script>
    <script src="assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>