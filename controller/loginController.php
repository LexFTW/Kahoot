<?php
	include "../model/Database.php";

	function login($user, $pass){
		$db = Database::getInstance("localhost","kahoot","root","");
		$login = $db->select("select * from user where name = '". $user . "' and password = SHA2('" .$pass."',512);", ['id']);
		if(!$login){
			return False;
		}else{
			return True;
		}
	}
 ?>
