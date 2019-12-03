<?php
	session_start();
	if(isset($_POST['buttonPin'])){
		$stm = $pdo->prepare("SELECT id FROM `room` where pin=".$_POST['pin']." and status='playing';");
		$stm->execute();
		$row = $stm->fetchAll();

		if($row){
			$_SESSION['room']=$row[0][0];			
			echo"<div class='col-8 mx-auto alert alert-info' role='alert'>You are in!</div>";
		}else {
			//echo '<script type="text/javascript">','window.location.href ="../php/namePin.php";','</script>';
	   		echo"<div class='col-8 mx-auto alert alert-danger' role='alert'>Wrong pin!</div>";
		}
	}
  ?>