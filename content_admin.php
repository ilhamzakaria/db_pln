
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ilham zakaria</title>

    <style> 
      #example1 {
      background-image: url(images/bg.jpg), url(bg.jpg);
      background-position: right bottom, left top;
      background-repeat: no-repeat, repeat;
      padding: 15px;
      color: white;
      margin-bottom: 100px;
    
}
h1 {
    margin: auto;
    margin-top: 20px;
}
.center {
    margin-top: 20px;
}

</style>

</head>
<body>
<!--     <div class="container"> -->
        




<?php
    include "koneksi.php";
    $modul = $_GET['module'];
    if ($modul=='home'){
        echo '<div id="example1">';
        echo '<h1 align="center">Selamat datang</h1>';
    	echo "<center class='center'>Hai, <b>".$_SESSION['username']."</b> anda sebagai <b>".$_SESSION['hakakses']." </b> <b>Selamat datang, Di Sistem Informasi Pembayaran Listrik</b><br></center>";

        echo '<img src="images/hero.png"';







        include "home.php";
    }
    else if ($modul=='tarif'){
        include "modul_admin/tarif/tarif.php";
    }
    else if ($modul=='register_tarif'){
        include "modul_admin/tarif/register_tarif.php";
    }
    else if ($modul=='update_tarif'){
        include "modul_admin/tarif/update_tarif.php";
    }
    else if ($modul=='update_proses_tarif'){
        include "modul_admin/tarif/update_proses_tarif.php";
    }
    else if ($modul=='delete_tarif'){
        include "modul_admin/tarif/delete_tarif.php";
    }
    else if ($modul=='laporan_tarif'){
        include "modul_admin/tarif/laporan_tarif.php";
    }
    else if ($modul=='pelanggan'){
        include "modul_admin/pelanggan/pelanggan.php";
    }
    else if ($modul=='register_pelanggan'){
        include "modul_admin/pelanggan/register_pelanggan.php";
    }
    else if ($modul=='update_pelanggan'){
        include "modul_admin/pelanggan/update_pelanggan.php";
    }
    else if ($modul=='update_proses_pelanggan'){
        include "modul_admin/pelanggan/update_proses_pelanggan.php";
    }
    else if ($modul=='delete_pelanggan'){
        include "modul_admin/pelanggan/delete_pelanggan.php";
    }
    else if ($modul=='laporan_pelanggan'){
        include "modul_admin/pelanggan/laporan_pelanggan.php";
    }
    else if ($modul=='penggunaan'){
        include "modul_admin/penggunaan/penggunaan.php";
    }
    else if ($modul=='register_penggunaan'){
        include "modul_admin/penggunaan/register_penggunaan.php";
    }
    else if ($modul=='update_penggunaan'){
        include "modul_admin/penggunaan/update_penggunaan.php";
    }
    else if ($modul=='update_proses_penggunaan'){
        include "modul_admin/penggunaan/update_proses_penggunaan.php";
    }
    else if ($modul=='delete_penggunaan'){
        include "modul_admin/penggunaan/delete_penggunaan.php";
    }
    else if ($modul=='laporan_penggunaan'){
        include "modul_admin/penggunaan/laporan_penggunaan.php";
    }
    else if ($modul=='tagihan'){
        include "modul_admin/tagihan/tagihan.php";
    }
    else if ($modul=='register_tagihan'){
        include "modul_admin/tagihan/register_tagihan.php";
    }
    else if ($modul=='update_tagihan'){
        include "modul_admin/tagihan/update_tagihan.php";
    }
    else if ($modul=='update_proses_tagihan'){
        include "modul_admin/tagihan/update_proses_tagihan.php";
    }
    else if ($modul=='delete_tagihan'){
        include "modul_admin/tagihan/delete_tagihan.php";
    }
    else if ($modul=='laporan_tagihan'){
        include "modul_admin/tagihan/laporan_tagihan.php";
    }
    else if ($modul=='pembayaran'){
        include "modul_admin/pembayaran/pembayaran.php";
    }
    else if ($modul=='register_pembayaran'){
        include "modul_admin/pembayaran/register_pembayaran.php";
    }
    else if ($modul=='update_pembayaran'){
        include "modul_admin/pembayaran/update_pembayaran.php";
    }
    else if ($modul=='update_proses_pembayaran'){
        include "modul_admin/pembayaran/update_proses_pembayaran.php";
    }
    else if ($modul=='delete_pembayaran'){
        include "modul_admin/pembayaran/delete_pembayaran.php";
    }
    else if ($modul=='laporan_pembayaran'){
        include "modul_admin/pembayaran/laporan_pembayaran.php";
    }
    else if ($modul=='user'){
        include "modul_admin/user/user.php";
    }
    else if ($modul=='register_user'){
        include "modul_admin/user/register_user.php";
    }
    else if ($modul=='update_user'){
        include "modul_admin/user/update_user.php";
    }
    else if ($modul=='update_proses_user'){
        include "modul_admin/user/update_proses_user.php";
    }
    else if ($modul=='delete_user'){
        include "modul_admin/user/delete_user.php";
    }
    else if ($modul=='laporan_user'){
        include "modul_admin/user/laporan_user.php";
    }
    else{
        echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP SILAHKAN BUAT SENDIRI</b>";
    }
?>


</div>
</body>
</html>