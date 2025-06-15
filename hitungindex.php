<?php
session_start();
include 'koneksi.php';

if (isset($_POST['hitung'])) {
	$pilih = isset($_POST['pilih']) ? $_POST['pilih'] : 0;

	if ($pilih == 0 || count($pilih) < 2) {
		header("Location: hitung.php?validasi=error");
	} else {
		$delete = mysqli_query($koneksi, "DELETE FROM checked");
		if ($delete) {
			for ($i = 0; $i < count($pilih); $i++) {
				$insert = mysqli_query($koneksi, "INSERT INTO checked(id_alternatif) VALUES('$pilih[$i]')");
				if (!$insert) {
					header("Location: hitung.php?validasi=error");
				}
			}
			header("Location: hpindex.php?validasi=sukses");
		} else {
			header("Location: hitung.php?validasi=error");
		}
	}
}
?>