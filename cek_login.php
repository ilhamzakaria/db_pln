<?php
	include "koneksi.php";
	$user	= $_POST['inputusername'];
	$pass	= md5($_POST['inputpassword']);
	$login	= mysqli_query($connection,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
	$ketemu	= mysqli_num_rows($login);
	if ($ketemu > 0){
		session_start();
	  	$datalogin = mysqli_fetch_array($login);
		$_SESSION['username'] = $datalogin['username'];
		$_SESSION['password'] = $datalogin['password'];
		$_SESSION['hakakses'] = $datalogin['hakakses'];
		if($datalogin['hakakses']=="admin"){
            header("location:media_admin.php?module=home");
        }else if($datalogin['hakakses']=="petugas"){
            header("location:media_petugas.php?module=home");
        }else{
            header("location:media_pengguna.php?module=home");
        }
	}else{
?>
    <script>
		alert('Maaf, Username atau Password salah.');
		window.location.href='index.php';
	</script>
<?php
	}
?>
