<?php
  session_start();
  include "koneksi.php";
  include "akses.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Media Admin</title>
  <link rel="stylesheet" href="css/style_content.css" type="text/css">
  <link rel="stylesheet" href="css/style_table.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
  body{
  }
</style>
</head>
  <body>

    <div class="style">
      
      
      <div class="menu">
        <?php include "menu_admin.php"; ?>
      </div>
      
      <div id="isi">
        <?php include "content_admin.php"; ?>
      </div>
      
      <div id="clearer">
      </div>
      
      <div class="footer" align="center">
      <marquee scrollamount="5" scrolldelay="5">selamat datang di website Pembayaran Listrik Pasca Bayar</marquee>
      </div>

    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </body>
</html>