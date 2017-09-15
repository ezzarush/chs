<?php
session_start();
include('../../config/class_database.php');
include('../../config/serverconfig.php');

if(isset($_SESSION["isLogin"])){
	// Header and Sidebar Inside
    include('header.php');
	
    // Content
	include('content.php');
    
    //Footer
    include('footer.php');
}else{
    header('Location: '.$app_path.'login');
}


?>