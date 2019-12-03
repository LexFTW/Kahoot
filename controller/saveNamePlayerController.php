<?php
	if(isset($_POST['buttonAnnoymous'])){
		$data = [
	    'roomID' => $_SESSION['room'],
	    'name' => $_POST['name']
		];
		$sql = "INSERT INTO player (roomID, name) VALUES (:roomID, :name);";
		$stm= $pdo->prepare($sql);
		$stm->execute($data);

		$stm2 = $pdo->prepare("SELECT id FROM `player` where roomID=:roomID and name=:name ;");
		$stm2->execute($data);
		$row = $stm2->fetchAll();

		if($row){
			$_SESSION['playerID']=$row[0][0];
			echo '<script type="text/javascript">','window.location.href ="../view/play.php";','</script>';			
		}
	}
?>	