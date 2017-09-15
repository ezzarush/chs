<?php
include('../../config/serverconfig.php');
$username = $_POST['username'];
$password = $_POST['password'];

$login    = mysqli_query($conn, "select * from ref_user where username='$username' and password='$password'");
$result   = mysqli_num_rows($login);

if($result>0){
    $user = mysqli_fetch_array($login);
    session_start();
    $_SESSION['username'] 	= $user['username'];
    $_SESSION['isLogin'] 	= TRUE;
	$_SESSION['level'] 		= $user['level'];
    	echo "<script>alert('Verifikasi Berhasil,  ".$_SESSION["username"]."  Berhasil Login!');";
		header('Location: '.$app_path.'main');
}else{
    header('Location: '.$app_path.'main');
}
?>