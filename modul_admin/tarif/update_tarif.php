<?php
	include "koneksi.php";
	$kode= $_GET['kode'];
	$queryEdit = mysqli_query($connection,"SELECT * FROM tarif where KodeTarif='$kode' limit 1")or die(mysqli_error());
	$dataEdit = mysqli_fetch_array($queryEdit);
?>
<div id="konten">
<h1>DATA tarif</h1>  
<form method="POST" action="media_admin.php?module=update_proses_tarif&amp;kode=<?php echo $dataEdit['KodeTarif'];?>" align="center" onsubmit="return validasi(this)">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="20%">Kode tarif</td>
			<td>:</td>
			<td>
				<input type="text" name="inputkodetarif" size="40%" value=<?php echo $dataEdit['KodeTarif'];?>>
			</td>
		</tr>               
		<tr>
			<td width="20%">Nama</td>
			<td>:</td>
			<td><input type="text" name="inputdaya" size="40%" value=<?php echo $dataEdit['Daya'];?>></td>
		</tr>
		<tr>
			<td width="20%">Alamat</td>
			<td>:</td>
			<td><input type="text" name="inputtarifperkwh" size="40%" value=<?php echo $dataEdit['TarifPerKWH'];?>></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="tambahtarif" value="Update tarif">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
</form>

<br>
<form method="POST" action="" align="center" onsubmit="return validasi(this)">
	Pencarian :	
	<input type="text" name="inputcari" size="40%">
	Kategori :	
	<select name="inputkategori" style="width: 20%;">
		<option value="KodeTarif">Kode Tarif</option>
		<option value="Daya">Daya</option>
		<option value="TarifPerKWH">Tarif Per KWH</option>
	</select>
	<input name="btncari" type="submit" value="Cari" />
</form>
<br>

<table border="1" width="100%">
	<thead>
		<th>Kode tarif</th>
		<th>Daya</th>
		<th>TarifPerKWH</th>
		<th colspan="2">Aksi</th>
	</thead>
	<tbody>
		<?php
			if(isset($_POST['btncari'])){
				$kategori = $_POST['inputkategori'];
				$datacari = $_POST['inputcari'];
				$sql = mysqli_query($connection,"select * from tarif 
					where $kategori LIKE '%$datacari%' 
					ORDER BY $kategori")or die (mysqli_error());
			}else{
				$sql = mysqli_query($connection,"select * from tarif")or die (mysqli_error());
			}
			while($mydata=mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $mydata['KodeTarif']; ?> </td>
			<td><?php echo $mydata['Daya']; ?> </td>
			<td><?php echo $mydata['TarifPerKWH']; ?> </td>
			<td><a href="media_admin.php?module=update_tarif&amp;kode=<?php echo $mydata['KodeTarif'];?>">Update</a></td>
			<td><a href="media_admin.php?module=delete_tarif&amp;kode=<?php echo $mydata['KodeTarif'];?>">Hapus</a></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

<script type="text/javascript">
	function validasi(form){
		if (form.inputkodetarif.value == ""){
	    	alert("Kode tarif masih kosong!");
	    	form.inputkodetarif.focus();
	    	return false;
	  	}
		if (form.inputdaya.value == ""){
	    	alert("Daya masih kosong!");
	    	form.inputdaya.focus();
	    	return false;
	  	}
  		if (form.inputtarifperkwh.value == ""){
	    	alert("Tarif Per KWH masih kosong!");
	    	form.inputtarifperkwh.focus();
	    	return false;
	  	}
		return true;
	}
</script>