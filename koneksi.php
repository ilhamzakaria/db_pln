<?php 
 $server="localhost";
 $username="root";
 $password="";
 $database="dbpln_iam";
 $connection=mysqli_connect($server,$username,$password,$database)or die("Gagal konek ke server MySQL".mysql_error());
 ?>