<?php 
session_start();
require_once("config.php");


	// prepei na tsekareis an o xrhsths einai sundedemenos. Alliws opoiosdhpote mporei na anevazei o,ti eikona thelei me ena aplo CURL post request ;)
	if(!$_SESSION['loggedin']) {
		header('location: index.php');
		return;
	}

	if (isset($_POST['update_img'])) {
		$description = trim($_POST["description2"]);
		$dimension = trim($_POST["dimension1"]);		

		if(empty(var)){

		}
	}
?>