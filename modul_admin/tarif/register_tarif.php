<?php
	include "koneksi.php";

	$kodetarif = $_POST['inputkodetarif'];
	$daya = $_POST['inputdaya'];
	$tarifperkwh = $_POST['inputtarifperkwh'];
	$query = "INSERT into tarif values ('$kodetarif', '$daya', '$tarifperkwh')";
	
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