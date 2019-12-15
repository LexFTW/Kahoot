<?php
$target_dir = "18.213.245.30/Kahoot/public/img/profile_image/";

include '../controllers/AuthController.php';

session_start();

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }

		if ($uploadOk == 0) {
    		echo "Sorry, your file was not uploaded.";
		}else{
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$auth = new AuthController;
			$auth ->changeProfile($_SESSION['auth']->getId(),$_FILES["fileToUpload"]["name"]);
			$_SESSION['auth']->setImage($_FILES["fileToUpload"]["name"]);
		}
	}
 ?>
