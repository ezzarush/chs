<?php
session_start();
include('../../config/serverconfig.php');

if(isset($_SESSION["isLogin"])){
	// Header and Sidebar Inside
    include('header.php');
	
    // Content
	include('content_problem_history.php');
    
    //Footer
    include('footer.php');
}else{
    header('Location: '.$app_path.'login');
}


?>