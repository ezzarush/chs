<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$nama_db  = "login";
$conn    = mysqli_connect($host, $user, $password, $nama_db);
if ($conn){
	mysqli_select_db($conn, $nama_db);
} else {
	echo "database tidak tersedia";
}
?>
