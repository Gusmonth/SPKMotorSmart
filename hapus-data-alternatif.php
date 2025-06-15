<?php
include 'koneksi.php';
if (!isset($_GET['id'])) {
	header("Location: 404.php");
    exit();
} else {
	$id = $_GET['id'];
	$delete1 = mysqli_query($koneksi, "DELETE FROM alternatif WHERE id_alternatif = '$id'");
	$delete2 = mysqli_query($koneksi, "DELETE FROM matriks WHERE id_alternatif = '$id'");
	if ($delete1 && $delete2) {
		header("Location: data-alternatif.php?validasi=sukses-hapus");
	} else {
		header("Location: data-alternatif.php?validasi=error");
	}
}
