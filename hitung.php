<?php
include 'koneksi.php';

$validasi = isset($_GET['validasi']) ? trim($_GET['validasi']) : "";
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
                                    <li><a href="#spk">Coba SPK</a></li>
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
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg-1.jpg);" id="spk">
        <div class="bradcumbContent">
            <p class="text-danger">Sistem akan menentukan Sepeda Motor Terbaik berdasarkan bobot dan kriteria pengguna.</p>
            <h2>SPK Pemilihan SMART</h2>
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
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-4.jpg);" id="kriteria">
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
                        } elseif ($validasi == "error-total-bobot") {
                            echo "
                                <div class='alert alert-warning alert-dismissible fade show mb-3' role='alert'>
                                    Total bobot tidak boleh lebih dari 100%
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "sukses-tambah-bobot") {
                            echo "
                                <div class='alert alert-success alert-dismissible show fade mb-3' role='alert'>
                                    Nilai bobot kriteri berhasil ditambahkan!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        } elseif ($validasi == "error-bobot") {
                            echo "
                                <div class='alert alert-danger alert-dismissible show fade mb-3' role='alert'>
                                    Proses Gagal!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            ";
                        }
                        ?>
                        <div class="card-body">
                        <div class="alert alert-info" role="alert" >
                            <p style="font-size: 1.3em;">1. SILAHKAN PILIH KRITERIA YANG INGIN DIGUNAKAN DAN BERIKAN BOBOT PADA KRITERIA TERPENTING ANDA, NILAI TOTAL BOBOT HARUS BERNILAI 100.
                            </p>
                        </div>
                        <form action="proses.php" method="post">
                            <div class="mb-3">
                                <label class="form-label text-white" style="font-size: 1.3em;">Tentukan Kriteria dan Berikan Bobot</label>

                                <!-- Dropdown Kriteria -->
                                <select id="kriteriaSelect" class="form-select" style="font-size: 1.3em; width: 200px; margin-bottom: 15px;">
                                    <option value="">Pilih Kriteria</option>
                                    <?php
                                    $query_kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria");
                                    while ($data_kriteria = mysqli_fetch_array($query_kriteria)) {
                                        echo "<option value='{$data_kriteria['id_kriteria']}' data-nama='{$data_kriteria['nama_kriteria']}' data-bobot='{$data_kriteria['bobot_kriteria']}'>{$data_kriteria['nama_kriteria']}</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                                <!-- Tabel Kriteria yang Dipilih -->
                                <table class="table table-striped text-white" style="font-size: 1.3em;">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                            <th>Bobot</th>
                                            <th>Edit Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody id="kriteriaTableBody">
                                        <!-- Baris kriteria yang dipilih akan ditambahkan di sini oleh JavaScript -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th id="totalBobot">0 %</th>
                                            <th><button type="submit" name="bobot_k" class="btn btn-primary">Simpan</button></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                        <div class="alert alert-info" role="alert" >
                            <p style="font-size: 1.3em;">2. KRITERIA PILIHAN DAN BOBOT KRITERIA TERPENTING YANG TERSIMPAN DITAMPILKAN DISINI.
                            </p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label text-white" style="font-size: 1.3em;">Kriteria dan Bobot yang Terpilih</label>

                                <!-- Tabel Kriteria yang Dipilih -->
                                <table class="table table-striped text-white" style="font-size: 1.3em;">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody id="kriteriaTable">
                                        <?php
                                        $query_kriteria = mysqli_query($koneksi, "SELECT * FROM kriteria WHERE bobot_kriteria > 0");
                                        $total_bobot = 0;
                                        while ($data_kriteria = mysqli_fetch_array($query_kriteria)) {
                                            $bobot_kriteria = ceil($data_kriteria['bobot_kriteria'] * 100);
                                            $total_bobot += $bobot_kriteria;
                                            echo "<tr>";
                                            echo "<td>{$data_kriteria['nama_kriteria']}</td>";
                                            echo "<td>{$bobot_kriteria} %</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th id="totalBobot"><?= $total_bobot; ?> %</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        <div class="alert alert-info" role="alert" >
                            <p style="font-size: 1.3em;">3. SILAHKAN PILIH MINIMAL 2 SEPEDA MOTOR UNTUK DIHITUNG AGAR DAPAT MELIHAT HASIL KEPUTUSAN PILIHAN SEPEDA MOTOR TERBAIK BERDASARKAN KRITERIA YANG ANDA PILIH.
                            </p>
                        </div>
                            <form class="table1" action="hitungindex.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <input type="text" id="searchBar" class="form-control" style="font-size: 1.3em;" placeholder="Search...">
                                    </div>
                                    <div class="col-md-8 text-end">
                                        <label for="entries" class="form-label text-white" style="font-size: 1.3em;">Show</label>
                                        <select id="entries" class="form-select d-inline-block w-auto" style="font-size: 1.3em;">
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                        </select>
                                        <label for="entries" class="form-label text-white" style="font-size: 1.3em;">entries</label>
                                    </div>
                                </div>
                                <table class="table table-striped" id="table1">
                                    <thead class="">
                                        <tr>
                                            <th class="text-center text-white" style="font-size: 1.3em;">No.</th>
                                            <th class="text-center text-white" style="font-size: 1.3em;">Kode Alternatif</th>
                                            <th class="text-center text-white" style="font-size: 1.3em;">Nama Alternatif</th>
                                            <th class="text-center text-white" style="font-size: 1.3em;">Aksi (pilih)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM alternatif");
                                        $no = 1;
                                        while ($baris = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                <td class="text-center text-white" style="font-size: 1.3em;"><?= $no; ?></td>
                                                <td class="text-center text-white" style="font-size: 1.3em;"><?= $baris['kode_alternatif']; ?></td>
                                                <td class="text-center text-white" style="font-size: 1.3em;"><?= $baris['nama_alternatif']; ?></td>
                                                <td class="" style="font-size: 1.3em;">
                                                    <div class="d-flex form-check justify-content-center">
                                                        <input name="pilih[]" value="<?= $baris['id_alternatif']; ?>" class="form-check-input me-1" type="checkbox" id="pilih" style="width: 25px; height: 25px; border-radius: 50%; accent-color: red;">
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot  class="text-white">
                                        <tr>
                                            <th colspan="3" class="text-end" style="font-size: 1.3em;">Pilih Semua Alternatif</th>
                                            <th>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input me-1" type="checkbox" id="pilih_semua" onclick="toggleCheckboxes(this)" style="width: 25px; height: 25px; border-radius: 50%; accent-color: red;">
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
                    <p class="copywrite-text"><a href="#">
                    Universitas Negeri Manado;<script>document.write(new Date().getFullYear());</script> Teknik Informatika | Email: Gusmonth@gmail.com <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Gusmon Jama</a>
                    </p>
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
                    document.getElementById('entries').dispatchEvent(new Event('change'));
    </script>
    <script>
        // JavaScript untuk menambahkan baris kriteria yang dipilih ke tabel
        let totalBobot = 0;
        document.getElementById('kriteriaSelect').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const kriteriaId = selectedOption.value;
            const kriteriaNama = selectedOption.getAttribute('data-nama');
            const bobotKriteria = parseFloat(selectedOption.getAttribute('data-bobot')) * 100;

            if (kriteriaId && !document.getElementById(`row-${kriteriaId}`)) {
                // Tambahkan baris baru ke tabel
                const tableBody = document.getElementById('kriteriaTableBody');
                const newRow = document.createElement('tr');
                newRow.id = `row-${kriteriaId}`;
                newRow.innerHTML = `
                    <td>${kriteriaNama}</td>
                    <td>${bobotKriteria} %</td>
                    <td>
                        <input type="hidden" name="id_kriteria[]" value="${kriteriaId}">
                        <input type="number" name="bobot[${kriteriaId}]" value="${bobotKriteria}" min="0" max="100" style="width: 60px;" onchange="updateTotalBobot()">
                    </td>
                `;
                tableBody.appendChild(newRow);
                        totalBobot += bobotKriteria;
                        document.getElementById('totalBobot').textContent = totalBobot + ' %';
                    }
            });

            function updateTotalBobot() {
            totalBobot = 0;
            const bobotInputs = document.querySelectorAll('[name^="bobot"]');
            bobotInputs.forEach(input => {
                totalBobot += parseFloat(input.value || 0);
            });
            document.getElementById('totalBobot').textContent = totalBobot + ' %';
        }
        // Saat form disubmit, tambahkan input untuk kriteria yang tidak dipilih
        document.querySelector('form').addEventListener('submit', function(event) {
            const selectedKriteriaIds = Array.from(document.querySelectorAll('[name="id_kriteria[]"]')).map(input => input.value);
            <?php
            $query_all_kriteria = mysqli_query($koneksi, "SELECT id_kriteria FROM kriteria");
            $allKriteriaIds = [];
            while ($row = mysqli_fetch_array($query_all_kriteria)) {
                $allKriteriaIds[] = $row['id_kriteria'];
            }
            ?>
            const allKriteriaIds = <?php echo json_encode($allKriteriaIds); ?>;

            allKriteriaIds.forEach(id => {
                if (!selectedKriteriaIds.includes(id)) {
                // Tambahkan input hidden untuk kriteria yang tidak dipilih dengan bobot 0
                const hiddenInputId = document.createElement('input');
                hiddenInputId.type = 'hidden';
                hiddenInputId.name = 'id_kriteria[]';
                hiddenInputId.value = id;
                this.appendChild(hiddenInputId);

                const hiddenInputBobot = document.createElement('input');
                hiddenInputBobot.type = 'hidden';
                hiddenInputBobot.name = `bobot[${id}]`;
                hiddenInputBobot.value = 0;
                this.appendChild(hiddenInputBobot);
            }
        });
    });
    </script>
</body>

</html>