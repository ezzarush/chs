<?php
include('../../config/class_database.php');
include('../../config/serverconfig.php');
session_start();
session_destroy();
header('Location: '.$app_path);
?>