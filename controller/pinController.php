<?php
	session_start();
	if(isset($_POST['buttonPin'])){
		$stm = $pdo->prepare("SELECT id FROM `room` where pin=".$_POST['pin']." and status='playing';");
		$stm->execute();
		$row = $stm->fetchAll();
				
		if($row){
			$_SESSION['room']=$row[0];			
			echo"<div class='alert alert-info' role='alert'>In</div>";
		}else {
			//echo '<script type="text/javascript">','window.location.href ="../php/namePin.php";','</script>';
	   		echo"<div class='alert alert-danger' role='alert'>This is a danger alert—check it out!</div>";
		}
	}
  ?>