<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['nama']) && !isset($_SESSION['level'])) {
    header("Location: index.php");
    exit;
}

if (!isset($_GET['id'])) {
	header("Location: 404.php");
    exit();
} else {
	$id = $_GET['id'];
	$delete = mysqli_query($koneksi, "DELETE FROM user WHERE id_pengguna = '$id'");
	if ($delete) {
		header("Location: data-pengguna.php?validasi=sukses-hapus");
	} else {
		header("Location: data-pengguna.php?validasi=error");
	}
}
