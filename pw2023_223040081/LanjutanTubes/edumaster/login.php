<?php 
session_start();
if( isset($_SESSION["login"])){
	header("location: admin/index.php");
	exit;
}
require('view/login.view.php');
?>