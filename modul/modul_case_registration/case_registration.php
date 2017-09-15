<?php
session_start();
include('../../config/class_database.php');
include('../../config/serverconfig.php');

if(isset($_SESSION["isLogin"])){
	// Header and Sidebar Inside
    include('../modul_core/header.php');
	
	$sql_topic  = $db->database_prepare("SELECT * FROM tran_reportunitsolution")->execute();
    // Content
	include('content_case_registration.php');
    
    //Footer
    include('../modul_core/footer.php');
}else{
    header('Location: '.$app_path.'login');
}


?>