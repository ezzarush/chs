<?php
include "konekdb.php";
$username = $_POST['username'];
$password = $_POST['password'];
$login    = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
$result   = mysqli_num_rows($login);
if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username'] = $user['username'];
    	echo "<script>alert('Verifikasi Berhasil,  ".$_SESSION["username"]."  Berhasil Login!');

		document.location.href='index.php?mnu=home';</script>";
}else{
    header("location:login2.php");
}
?>