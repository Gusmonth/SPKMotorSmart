<?php
session_start();
include 'koneksi.php';

if (isset($_POST['masuk'])) {
	$user = htmlspecialchars($_POST['user']);
	$pass = htmlspecialchars($_POST['pass']);
	$hash = hash('sha256', $pass);

	$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$hash'");
	if (mysqli_num_rows($query) > 0) {
		$baris = mysqli_fetch_array($query);
		$_SESSION['id'] = $baris['id_pengguna'];
		$_SESSION['username'] = $baris['username'];
		$_SESSION['nama'] = $baris['nama'];
		$_SESSION['level'] = $baris['level'];
		header("Location: dashboard.php?validasi=sukses");
	} else {
		header("Location: login.php?validasi=error");
	}
}

if (isset($_POST['tambah-kriteria'])) {
	$kode = htmlspecialchars($_POST['kode']);
	$nama = htmlspecialchars($_POST['nama']);
	$bobot = htmlspecialchars($_POST['bobot']);
	$jenis = htmlspecialchars($_POST['jenis']);

	$bobot = $bobot / 100;

	$query = mysqli_query($koneksi, "SELECT kode_kriteria FROM kriteria WHERE kode_kriteria = '$kode'");
	if (mysqli_num_rows($query) > 0) {
		header("Location: data-kriteria.php?validasi=warning");
	} else {
		$insert = mysqli_query($koneksi, "INSERT INTO kriteria(kode_kriteria, nama_kriteria, jenis_kriteria, bobot_kriteria) VALUES('$kode', '$nama', '$jenis', '$bobot')");
		if ($insert) {
			header("Location: data-kriteria.php?validasi=sukses-tambah");
		} else {
			header("Location: data-kriteria.php?validasi=error");
		}
	}
}

if (isset($_POST['edit-kriteria'])) {
	$id = htmlspecialchars($_POST['id']);
	$kode = htmlspecialchars($_POST['kode']);
	$nama = htmlspecialchars($_POST['nama']);
	$bobot = htmlspecialchars($_POST['bobot']);
	$jenis = htmlspecialchars($_POST['jenis']);

	$bobot = $bobot / 100;

	$update = mysqli_query($koneksi, "UPDATE kriteria SET kode_kriteria = '$kode', nama_kriteria = '$nama', jenis_kriteria = '$jenis', bobot_kriteria = '$bobot' WHERE id_kriteria = '$id'");
	if ($update) {
		header("Location: data-kriteria.php?validasi=sukses-perbarui");
	} else {
		header("Location: data-kriteria.php?validasi=error");
	}
}

if (isset($_POST['bobot_k'])) {
    // Pastikan $koneksi sudah terhubung ke database
    $total_bobot = 0; // Inisialisasi total bobot

    // Hitung total bobot dari input yang diberikan
    foreach ($_POST['bobot'] as $bobot) {
        $bobot = htmlspecialchars($bobot); // Sanitasi input
        $total_bobot += $bobot; // Tambah ke total bobot
    }

    // Cek jika total bobot lebih dari 100
    if ($total_bobot > 100) {
        header("Location: hitung.php?validasi=error-total-bobot");
    }

    // Jika total bobot valid, lakukan update
    foreach ($_POST['bobot'] as $id_kriteria => $bobot) {
        $id_kriteria = htmlspecialchars($id_kriteria);
        $bobot = htmlspecialchars($bobot) / 100; // Ubah bobot menjadi desimal

        // Query update yang benar
        $update = mysqli_query($koneksi, "UPDATE kriteria SET bobot_kriteria = '$bobot' WHERE id_kriteria = '$id_kriteria'");

        // Cek jika ada kesalahan dalam query
        if (!$update) {
            // Jika ada error, redirect dengan pesan error
            header("Location: hitung.php?validasi=error-bobot");
            exit; // Penting untuk menghentikan script setelah redirect
        }
    }

    // Jika semua update berhasil
    header("Location: hitung.php?validasi=sukses-tambah-bobot#kriteria");
    exit; // Penting untuk menghentikan script setelah redirect
}



if (isset($_POST['tambah-subkriteria'])) {
	$id = htmlspecialchars($_POST['id']);
	$nama = htmlspecialchars($_POST['nama']);
	$nilai = htmlspecialchars($_POST['nilai']);

	$insert = mysqli_query($koneksi, "INSERT INTO subkriteria(id_kriteria, nama_subkriteria, nilai_subkriteria) VALUES('$id', '$nama', '$nilai')");
	if ($insert) {
		header("Location: data-subkriteria.php?validasi=sukses-tambah");
	} else {
		header("Location: data-subkriteria.php?validasi=error");
	}
}

if (isset($_POST['edit-subkriteria'])) {
	$id = htmlspecialchars($_POST['id']);
	$nama = htmlspecialchars($_POST['nama']);
	$nilai = htmlspecialchars($_POST['nilai']);

	$update = mysqli_query($koneksi, "UPDATE subkriteria SET nama_subkriteria = '$nama', nilai_subkriteria = '$nilai' WHERE id_subkriteria = '$id'");
	if ($update) {
		header("Location: data-subkriteria.php?validasi=sukses-perbarui");
	} else {
		header("Location: data-subkriteria.php?validasi=error");
	}
}

if (isset($_POST['tambah-alternatif'])) {
	$kode = htmlspecialchars($_POST['kode']);
	$nama = htmlspecialchars($_POST['nama']);
	$harga = htmlspecialchars($_POST['harga']);
	$kapasitas = htmlspecialchars($_POST['kapasitas']);
	$tenaga = htmlspecialchars($_POST['tenaga']);
	$fitur = htmlspecialchars($_POST['fitur']);
	$kategori = htmlspecialchars($_POST['kategori']);
	$transmisi = htmlspecialchars($_POST['transmisi']);
	$starter = htmlspecialchars($_POST['starter']);
	$torsi = htmlspecialchars($_POST['torsi']);
	$kecepatan = htmlspecialchars($_POST['kecepatan']);
	$berat = htmlspecialchars($_POST['berat']);
	$tangki = htmlspecialchars($_POST['tangki']);
	$konsumsi = htmlspecialchars($_POST['konsumsi']);
	$torsirpm = htmlspecialchars($_POST['torsirpm']);
	$tenagarpm = htmlspecialchars($_POST['tenagarpm']);
	$gambar = $_FILES['gambar']['name'];
	$kriteria = $_POST['kriteria'];
	$subkriteria = $_POST['subkriteria'];

	// Upload gambar
	$target_dir = "img/";
	$target_file = $target_dir . basename($gambar);
	move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

	$query = mysqli_query($koneksi, "SELECT kode_alternatif FROM alternatif WHERE kode_alternatif = '$kode'");
	if (mysqli_num_rows($query) > 0) {
		header("Location: data-alternatif.php?validasi=warning");
	} else {
		$insert = mysqli_query($koneksi, "INSERT INTO alternatif(kode_alternatif, nama_alternatif, gambar) VALUES('$kode', '$nama', '$gambar')");
		if ($insert) {
			$get_id = mysqli_fetch_array(mysqli_query($koneksi, "SELECT id_alternatif FROM alternatif ORDER BY id_alternatif DESC LIMIT 1"));
			$id_alternatif = $get_id['id_alternatif'];
			
			// Insert into detail table with id_alternatif
			$insert_detail = mysqli_query($koneksi, "INSERT INTO detail(id_alternatif, harga, kapasitas, tenaga, fitur, kategori, transmisi, starter, torsi, kecepatan, berat, tangki, konsumsi, torsirpm, tenagarpm) VALUES('$id_alternatif', '$harga', '$kapasitas', '$tenaga', '$fitur', '$kategori', '$transmisi', '$starter', '$torsi', '$kecepatan', '$berat', '$tangki', '$konsumsi', '$torsirpm', '$tenagarpm')");
			if (!$insert_detail) {
				header("Location: data-alternatif.php?validasi=error");
			}
			
			for ($i = 0; $i < count($kriteria); $i++) {
				$insert = mysqli_query($koneksi, "INSERT INTO matriks(id_alternatif, id_kriteria, id_subkriteria) VALUES('$id_alternatif', '$kriteria[$i]', '$subkriteria[$i]')");
				if (!$insert) {
					header("Location: data-alternatif.php?validasi=error");
				}
			}
			header("Location: data-alternatif.php?validasi=sukses-tambah");
		} else {
			header("Location: data-alternatif.php?validasi=error");
		}
	}
}

if (isset($_POST['edit-alternatif'])) {
	$id = htmlspecialchars($_POST['id']);
	$kode = htmlspecialchars($_POST['kode']);
	$nama = htmlspecialchars($_POST['nama']);
	$harga = htmlspecialchars($_POST['harga']);
	$kapasitas = htmlspecialchars($_POST['kapasitas']);
	$tenaga = htmlspecialchars($_POST['tenaga']);
	$fitur = htmlspecialchars($_POST['fitur']);
	$kategori = htmlspecialchars($_POST['kategori']);
	$transmisi = htmlspecialchars($_POST['transmisi']);
	$starter = htmlspecialchars($_POST['starter']);
	$torsi = htmlspecialchars($_POST['torsi']);
	$kecepatan = htmlspecialchars($_POST['kecepatan']);
	$berat = htmlspecialchars($_POST['berat']);
	$tangki = htmlspecialchars($_POST['tangki']);
	$konsumsi = htmlspecialchars($_POST['konsumsi']);
	$torsirpm = htmlspecialchars($_POST['torsirpm']);
	$tenagarpm = htmlspecialchars($_POST['tenagarpm']);
	$kriteria = $_POST['kriteria'];
	$subkriteria = $_POST['subkriteria'];
	$gambar = $_FILES['gambar']['name'];

	// Upload gambar jika ada
	if ($gambar) {
		$target_dir = "img/";
		$target_file = $target_dir . basename($gambar);
		move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);
		$update = mysqli_query($koneksi, "UPDATE alternatif SET kode_alternatif = '$kode', nama_alternatif = '$nama', gambar = '$gambar' WHERE id_alternatif = '$id'");
	} else {
		$update = mysqli_query($koneksi, "UPDATE alternatif SET kode_alternatif = '$kode', nama_alternatif = '$nama' WHERE id_alternatif = '$id'");
	}

	if ($update) {
		$update_detail = mysqli_query($koneksi, "UPDATE detail SET harga = '$harga', kapasitas = '$kapasitas', tenaga = '$tenaga', fitur = '$fitur', kategori = '$kategori', transmisi = '$transmisi', starter = '$starter', torsi = '$torsi', kecepatan = '$kecepatan', berat = '$berat', tangki = '$tangki', konsumsi = '$konsumsi', torsirpm = '$torsirpm', tenagarpm = '$tenagarpm' WHERE id_alternatif = '$id'");
		if ($update_detail) {
			$delete = mysqli_query($koneksi, "DELETE FROM matriks WHERE id_alternatif = '$id'");
			if ($delete) {
				for ($i = 0; $i < count($kriteria); $i++) {
					$insert = mysqli_query($koneksi, "INSERT INTO matriks(id_alternatif, id_kriteria, id_subkriteria) VALUES('$id', '$kriteria[$i]', '$subkriteria[$i]')");
					if (!$insert) {
						header("Location: data-alternatif.php?validasi=error");
					}
				}
				header("Location: data-alternatif.php?validasi=sukses-perbarui");
			} else {
				header("Location: data-alternatif.php?validasi=error");
			}
		} else {
			header("Location: data-alternatif.php?validasi=error");
		}
	} else {
		header("Location: data-alternatif.php?validasi=error");
	}
}

if (isset($_POST['hitung'])) {
	$pilih = isset($_POST['pilih']) ? $_POST['pilih'] : 0;

	if ($pilih == 0 || count($pilih) < 2) {
		header("Location: data-perhitungan.php?validasi=error");
	} else {
		$delete = mysqli_query($koneksi, "DELETE FROM checked");
		if ($delete) {
			for ($i = 0; $i < count($pilih); $i++) {
				$insert = mysqli_query($koneksi, "INSERT INTO checked(id_alternatif) VALUES('$pilih[$i]')");
				if (!$insert) {
					header("Location: data-perhitungan.php?validasi=error");
				}
			}
			header("Location: proses-perhitungan.php?validasi=sukses");
		} else {
			header("Location: data-perhitungan.php?validasi=error");
		}
	}
}

if (isset($_POST['edit-profil'])) {
	$id = htmlspecialchars($_POST['id']);
	$nama = htmlspecialchars($_POST['nama']);
	$user = htmlspecialchars($_POST['username']);
	$pass_new = htmlspecialchars($_POST['pass_new']);
	$konfir = htmlspecialchars($_POST['konfir']);
	$gambar = $_FILES['gambar']['name']; // Mengambil nama file gambar
	$target_dir = "assets/images/faces/"; // Direktori penyimpanan gambar
	$target_file = $target_dir . basename($gambar); // Path lengkap file gambar

	// Menyimpan gambar ke direktori jika ada gambar yang diupload
	if ($gambar != "") {
		move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);
	}

	if ($pass_new == "" || $konfir == "") {
		if ($gambar != "") {
			$update = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$user', gambar = '$gambar' WHERE id_pengguna = '$id'"); // Mengupdate gambar
		} else {
			$update = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$user' WHERE id_pengguna = '$id'");
		}
		if ($update) {
			header("Location: data-profil.php?validasi=sukses");
		} else {
			header("Location: data-profil.php?validasi=error");
		}
	} else {
		if ($pass_new === $konfir) {
			$pass_new = hash('sha256', $pass_new);
			if ($gambar != "") {
				$update = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$user', password = '$pass_new', gambar = '$gambar' WHERE id_pengguna = '$id'"); // Mengupdate gambar
			} else {
				$update = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$user', password = '$pass_new' WHERE id_pengguna = '$id'");
			}
			if ($update) {
				header("Location: data-profil.php?validasi=sukses");
			} else {
				header("Location: data-profil.php?validasi=error");
			}
		} else {
			header("Location: data-profil.php?validasi=error");
		}
	}
}

if (isset($_POST['tambah-pengguna'])) {
	$nama = htmlspecialchars($_POST['nama']);
	$user = htmlspecialchars($_POST['user']);
	$level = htmlspecialchars($_POST['level']);
	$pass = htmlspecialchars($_POST['pass']);
	$konfir = htmlspecialchars($_POST['konfir']);

	if ($pass == $konfir) {
		$query = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$user'");
		if (mysqli_num_rows($query) > 0) {
			header("Location: data-pengguna.php?validasi=warning");
		} else {
			$hash = hash('sha256', $pass);
			$insert = mysqli_query($koneksi, "INSERT INTO user(nama, username, password, level) VALUES('$nama', '$user', '$hash', '$level')");
			if ($insert) {
				header("Location: data-pengguna.php?validasi=sukses-tambah");
			} else {
				header("Location: data-pengguna.php?validasi=error");
			}
		}
	} else {
		header("Location: data-pengguna.php?validasi=error");
	}
}

if (isset($_POST['edit-pengguna'])) {
	$id = htmlspecialchars($_POST['id']);
	$nama = htmlspecialchars($_POST['nama']);
	$user = htmlspecialchars($_POST['user']);
	$level = htmlspecialchars($_POST['level']);
	$pass = htmlspecialchars($_POST['pass']);
	$konfir = htmlspecialchars($_POST['konfir']);

	if ($pass == "" && $konfir == "") {
		$update = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$user', level = '$level' WHERE id_pengguna = '$id'");
		if ($update) {
			header("Location: data-pengguna.php?validasi=sukses-perbarui");
		} else {
			header("Location: data-pengguna.php?validasi=error");
		}
	} else {
		if ($pass == $konfir) {
			$hash = hash('sha256', $pass);
			$update = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$user', password = '$hash', level = '$level' WHERE id_pengguna = '$id'");
			if ($update) {
				header("Location: data-pengguna.php?validasi=sukses-perbarui");
			} else {
				header("Location: data-pengguna.php?validasi=error");
			}
		} else {
			header("Location: data-pengguna.php?validasi=error");
		}
	}
}

if (isset($_POST['verif'])) {
	$nama = htmlspecialchars($_POST['nama']);
	$user = htmlspecialchars($_POST['user']);

	$verifikasi = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE nama = '$nama' AND username = '$user'");
	if (mysqli_num_rows($verifikasi) > 0) {
		header("Location: ubah-pass.php?validasi=sukses&user=" . $user . "");
	} else {
		header("Location: lupa-pass.php?validasi=error");
	}
}

if (isset($_POST['pass-new'])) {
	$user = htmlspecialchars($_POST['user']);
	$pass = htmlspecialchars($_POST['pass']);
	$konfir = htmlspecialchars($_POST['konfir']);

	if ($pass === $konfir) {
		$hash = hash('sha256', $pass);
		$update = mysqli_query($koneksi, "UPDATE user SET password = '$hash' WHERE username = '$user'");
		if ($update) {
			echo "
			<script>
				alert('Ubah password berhasil');
				document.location.href = 'masuk.php';
			</script>
			";
			exit;
		} else {
			header("Location: ubah-pass.php?validasi=error");
		}
	} else {
		header("Location: ubah-pass.php?validasi=error");
	}
}
