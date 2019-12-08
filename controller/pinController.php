<?php
	session_start();
	if(isset($_POST['buttonPin'])){
		$data = [
	    'pin' => $_POST['pin']
		];

		$stm = $pdo->prepare("SELECT id FROM `room` where pin=:pin and status='playing';");
		$stm->execute($data);
		$row = $stm->fetchAll();

		if($row){
			var_dump($row[0][0]);
			$_SESSION['roomID']=$row[0][0];
			 echo '<script type="text/javascript">','window.location.href ="../view/namePin.php";','</script>';
		}else {
	   		echo"<div class='mt-4 col-4 mx-auto alert alert-danger' role='alert'>Pin!</div>";
		}
	}
  ?>
