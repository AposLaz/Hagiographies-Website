<?php
	session_start();
	
	require_once("config.php");


	// prepei na tsekareis an o xrhsths einai sundedemenos. Alliws opoiosdhpote mporei na anevazei o,ti eikona thelei me ena aplo CURL post request ;)
	if(!$_SESSION['loggedin']) {
		header('location: index.php');
		return;
	}

	if (isset($_POST['upload_image'])) {

	
		$description = trim($_POST["description1"]);
		$dimension = trim($_POST["dimension"]);

		if($_POST["eikona"]==1)
		{
			$type_image="pinakas";
		}
		else{
			$type_image="toixografia";
		}

		$image = $_FILES['image']['name'];
		$type = $_FILES['image']['type'];
		$temp = $_FILES['image']['tmp_name'];
		$size = $_FILES['image']['size'];

		$imageExt = explode('.', $image);
		$allowExt = strtolower(end($imageExt));
		$allow = array('jpg','jpeg','png','jpe');
		$target = "images_marios/".$image;
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		if (in_array($allowExt,$allow)) {
			if($size<4000000)
			{	
				move_uploaded_file($temp,$target);
				$sql = "INSERT INTO images (image_name,type,description,dimension) VALUES ('$image','$type_image','$description','$dimension')";
				$res = mysqli_query($link,$sql) or die('There was an error');
				$_SESSION['msg'] = "Η εικόνα ανέβηκε με επιτυχία";
				header('Location: gallery.php#image_senction');
			}
			else
			{
				$_SESSION['msg'] = "Η εικόνα που προσπαθείς να ανεβάσεις είναι αρκετά μεγάλη!!!";
				header('Location: gallery.php?');
			}
		}
		else
		{
			$_SESSION['msg'] = "Ο τύπος εικόνας που προσπαθείς να ανεβάσεις δεν είναι σωστός!!!Ξαναπροσπάθησε";
			header('Location: gallery.php');
		}
	}
	else{
		header('Location: gallery.php');
	}
 ?>