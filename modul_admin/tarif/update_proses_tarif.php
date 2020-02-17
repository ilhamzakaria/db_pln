<?php
	include "koneksi.php";

	$kode= $_GET['kode'];
	$kodetarif=$_POST['inputkodetarif'];
	$daya=$_POST['inputdaya'];
	$tarifperkwh=$_POST['inputtarifperkwh'];
	$query = "UPDATE tarif SET KodeTarif='$kodetarif', Daya='$daya', TarifPerKWH='$tarifperkwh' WHERE KodeTarif='$kode'";

	$cekquery = mysqli_query($connection,$query);
	if ($cekquery) {
?>

		<script>
			alert('Data berhasil di tambahkan!');
			location='media_admin.php?module=tarif';
		</script>

<?php
		}else{
?>
		<script>
			alert('Gagal di tambahkan!');
			location='media_admin.php?module=tarif';
		</script>
<?php
		}
?>
