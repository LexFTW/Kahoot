<?php 		

		$stm = $pdo->prepare("SELECT status FROM `room` where id=".$_SESSION['roomID']." ;");
		$stm->execute();
		$row = $stm->fetchAll();		
		$status=$row[0][0];	

		if($status=="playing"){
			echo "<img class='img-fluid mx-auto d-block' src='../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg' alt='Logo Kahoot' title='Logo Kahoot' />
					
						<div class='lds-roller'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>";
		}elseif ($status=="finished") {
			echo "ERROR";
		}	
			

		
	



	



 ?>