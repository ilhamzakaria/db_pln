<?php
	include "koneksi.php";
?>
<div class="container">
<div id="konten">
<h1>Data Tarif</h1>  
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Tarif
</button>

<!-- Modal -->
<form method="POST" action="media_admin.php?module=register_tarif" onsubmit="return validasi(this)">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form>
		<div class="form-group">
			<label>kode tarif</label>
			<input type="text" name="inputkodetarif" class="form-control">
		</div>
		<div class="form-group">
			<label>Daya</label>
			<input type="text" name="inputdaya" class="form-control">
		</div>
		<div class="form-group">
			<label>TarifPerKWH</label>
			<input type="text" name="inputtarifperkwh" class="form-control">
		</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="reset" name="reset" class="btn btn-secondary">Close</button>
        <button type="submit" name="tambahTarif" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<br>
<form method="POST" action="" onsubmit="return validasi(this)">
	<div class="input-group mb-3">
		<input type="text" name="inputcari" class="form-control">
		<div class="input-group-append">
			<span class="input-group-text" id="basic-addon2">Cari..</span>
		</div>
	</div>


	Kategori :	
	<select name="inputkategori" style="width: 20%; height: 30px;">
		<option value="KodeTarif">Kode Tarif</option>
		<option value="Daya">Daya</option>
		<option value="TarifPerKWH">Tarif Per KWH</option>
	</select>
	<input name="btncari" type="submit" value="Cari"/>
	<a href="modul_admin/tarif/laporan_tarif.php" target="blank">print</a>
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
		if (form.inputKodeTarif.value == ""){
	    	alert("Kode tarif masih kosong!");
	    	form.inputKodeTarif.focus();
	    	return false;
	  	}
		if (form.inputDaya.value == ""){
	    	alert("Daya masih kosong!");
	    	form.inputDaya.focus();
	    	return false;
	  	}
  		if (form.inputTarifPerKWH.value == ""){
	    	alert("Tarif Per KWH masih kosong!");
	    	form.inputTarifPerKWH.focus();
	    	return false;
	  	}
		return true;
	}
</script>

</div>