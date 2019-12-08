<?php 
	
	include "../model/Database.php";

	function createAnswer($table,$data){
		$db = Database::getInstance("localhost","kahoot","root","");
		$isInsert = $db -> insert($table,$data);
		return $isInsert;
	}

 ?>