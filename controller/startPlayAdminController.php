<?php
	

	function createPin(){
		$data = [
	    'surveyID' => $_SESSION['surveyID'],
	    'userID' => $_SESSION['userID']
		];
		
		$pdo = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd")-> getPDO();

		$sql = "INSERT INTO room (surveyID, userID, status ) VALUES (:surveyID, :userID, 'playing');";
		$stm= $pdo->prepare($sql);
		$stm->execute($data);

		$stm2 = $pdo->prepare("SELECT max(id) FROM room where surveyID=:surveyID and userID=:userID ;");
		$stm2->execute($data);
		$row = $stm2->fetchAll();

		if($row){
			$_SESSION['roomID']=$row[0][0];			
		}

		$stm3 = $pdo->prepare("UPDATE room SET pin=CONCAT(id,surveyID,userID)");
		$stm3->execute($data);


		$stm4 = $pdo->prepare("SELECT pin FROM room where id=".$_SESSION['roomID'].";");
		$stm4->execute($data);
		$row2 = $stm4->fetch();		
		$_SESSION['pin']=$row2[0];		

	}


	function playerSurvey(){
		$pdo = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd")-> getPDO();
		$sql = "SELECT name FROM player where roomID=".$_SESSION['roomID'].";";
		$stm = $pdo->prepare($sql);
		$stm->execute();
		$row = $stm->fetchAll();		
		if($row){			
			return $row;
		}
		return null;

		

	}
	
	

  ?>
