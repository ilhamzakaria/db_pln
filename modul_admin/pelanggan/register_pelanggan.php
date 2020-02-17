<?php
	include "koneksi.php";

	$idpelanggan = $_POST['inputidpelanggan'];
	$nometer = $_POST['inputnometer'];
	$nama = $_POST['inputnama'];
	$alamat = $_POST['inputalamat'];
	$kodetarif = $_POST['inputkodetarif'];
	
	$query = "INSERT into pelanggan values ('$idpelanggan','$nometer','$nama','$alamat','$kodetarif')";
	
	$cekquery = mysqli_query($connection,$query);

	if ($cekquery) {
?>

	<script>
		alert('Data berhasil di tambahkan!');
		location='media_admin.php?module=pelanggan';
	</script>

<?php
	}else{
?>
	<script>
		alert('Gagal di tambahkan!');
		location='media_admin.php?module=pelanggan';
	</script>
<?php
	}
?>