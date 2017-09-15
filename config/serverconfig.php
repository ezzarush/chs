<?php


//GLOBAL CONFIG
$hostname 	= $_SERVER['SERVER_NAME'];
$app_path   = 'http://'.$hostname.'/chs/';

//DATABASE CONFIG
$hostname	= 'localhost';
$username	= 'root';
$password	= '';
$database	= 'db_chs';
$conn		= mysqli_connect($hostname,$username,$password,$database);
?>