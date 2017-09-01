<?php
session_start();
include('../../config/serverconfig.php');

if(isset($_SESSION["isLogin"])){
    include('content.php');
	// //Header
    // include('header.php');
    // //Sidebar
    // include('sidebar.php');
    // //Content
    // include('content.php');
    // //Footer
    // include('footer.php');
}else{
    header('Location: '.$app_path.'login');
}


?>