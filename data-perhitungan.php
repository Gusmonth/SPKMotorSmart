<?php
include 'koneksi.php';
session_start();
$validasi = isset($_GET['validasi']) ? trim($_GET['validasi']) : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perhitungan</title>

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
                                <h3><i class="bi bi-calculator-fill"></i> Data Perhitungan</h3>
                                <p class="text-subtitle text-muted">Data perhitungan yang akan diproses.</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Menu</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Perhitungan
                                        </li>
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
                                    Proses perhitungan berhasil!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "minus") {
                            echo "
                                <div class='alert alert-dark alert-dismissible show fade mb-3' role='alert'>
                                    Data alternatif tidak lengkap, mohon untuk dilengkapi terlebih dahulu!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "error") {
                            echo "
                                <div class='alert alert-danger alert-dismissible show fade mb-3' role='alert'>
                                    Proses perhitungan gagal!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "warning") {
                            echo "
                                <div class='alert alert-warning alert-dismissible fade show mb-3' role='alert'>
                                    Total bobot kriteria harus 100%, silahkan ke menu data kriteria untuk memperbarui bobot kriteria!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        }
                        ?>
                                <h7 class="text-danger card-title">*silahkan pilih minimal 2 alternatif untuk di hitung agar dapat melihat hasil rekomendasi dari sistem.</h7>
                            </div>
                            <div class="card-body">
                            <form class="table-responsive" action="proses.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <input type="text" id="searchBar" class="form-control" placeholder="Search...">
                                    </div>
                                    <div class="col-md-8 text-end">
                                        <label for="entries" class="form-label">Show</label>
                                        <select id="entries" class="form-select d-inline-block w-auto">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        <label for="entries" class="form-label">entries</label>
                                    </div>
                                </div>
                                <table class="table table-striped" id="table1">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th class="text-center text-white">No.</th>
                                            <th class="text-center text-white">Kode Alternatif</th>
                                            <th class="text-center text-white">Nama Alternatif</th>
                                            <th class="text-center text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM alternatif");
                                        $no = 1;
                                        while ($baris = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $no; ?></td>
                                                <td class="text-center"><?= $baris['kode_alternatif']; ?></td>
                                                <td class="text-center"><?= $baris['nama_alternatif']; ?></td>
                                                <td class="text-center">
                                                    <div class="d-flex form-check justify-content-center">
                                                        <input name="pilih[]" value="<?= $baris['id_alternatif']; ?>" class="form-check-input me-1" type="checkbox" id="pilih">
                                                        <label class="form-check-label" for="pilih">
                                                            Pilih
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3" class="text-end">Aksi</th>
                                            <th>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="pilih_semua" onclick="toggleCheckboxes(this)">
                                                    <label class="form-check-label" for="pilih_semua">
                                                        Pilih semua alternatif
                                                    </label>
                                                </div>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="text-center mb-3">
                                    <button name="hitung" class="btn btn-success">Hitung Alternatif</button>
                                </div>
                            </form>
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
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
    
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