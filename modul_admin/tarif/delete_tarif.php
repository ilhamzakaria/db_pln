<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	mysqli_query($connection,"DELETE FROM tarif WHERE KodeTarif='$kode'");
	header("location:media_admin.php?module=tarif");
?>