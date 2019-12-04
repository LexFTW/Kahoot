<?php
	include "../model/Database.php";

	function login($user, $pass){
		$db = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd");
		$login = $db -> select("select * from user where email = '". $user . "' and password = SHA2('" .$pass."',512);");
		if(!$login){
			return False;
		}else{
			$_SESSION['userID']=$login['id'];
			$_SESSION['nameUser']=$login['name']." ".$login['lastName'];
			return True;
		}
	}
 ?>
