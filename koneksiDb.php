<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'dbfilm');

$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die ('Unable Connect');

if($db_connect){
	echo "Koneksi Berhasil!";
}else{
	echo "Koneksi Gagal!";
	exit();
}

header('Content-Type:application/json');
?>