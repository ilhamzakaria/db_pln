<?php
include"koneksi.php";
if(isset($_SESSION['username'])) {
	header("location:media_admin.php?module=home");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Pembayaran Listrik Pasca Bayar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
	.formlogin{
  background: #eaeaea;
  width: 300px;
  height: 100px;
  font-family:sans-serif;
  font-size:12px;
  margin: 200px auto auto;
  padding: 20px;
}
  .input{
  	border-radius: 50px;
  	margin: auto;
  }
	</style>
</head>
	
<body>
<div class="formlogin">
	<form action="cek_login.php" method="POST" onsubmit="return validasi(this)">
		<table border="0">
			<tr>
				<td>username</td>
				<td><input type="text" name="inputusername" class="input"></input></td>
			<tr>
				<td>password</td>
				<td><input type="password" name="inputpassword" class="input"></input></td>
			</tr>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login" name="Login" class="tombol"></input></td>
				<td></td>
			</tr>

		</table>
	</form>
</div>
</body>
<script type="text/javascript">
	function validasi(form) {
		if (form.inputusername.value=="") {
			alert("Anda belum mengisikan username");
			form.inputusername.focus();
			return false;
		}
		if (form.inputpassword.value=="") {
			alert("Anda belum mengisikan password");
			form.inputpassword.focus();
			return false;
		}
		return true;
	}
</script>
</html>