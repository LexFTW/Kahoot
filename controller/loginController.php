<?php 
	include "../model/database2.php";
	function login($user, $pass){
		$db = Database::getInstance("localhost","Kahoot","rogeraws","P@ssw0rd");
		$login = $db -> select("select * from user where name = '". $user . "' and password = SHA2('" .$pass."',512);");
		if(!$login){
			return False;
		}else{
			return True;
		}

	}
 ?>