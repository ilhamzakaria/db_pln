<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	mysqli_query($connection,"DELETE FROM pelanggan WHERE IdPelanggan='$kode'");
	header("location:media_admin.php?module=pelanggan");
?>