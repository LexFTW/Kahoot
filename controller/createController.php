<?php
	include "../model/Database.php";

	function createQuestion($table, $data, $answer){
		echo $answer;
		$db = Database::getInstance("localhost","kahoot","root","");
		$isInsert = $db -> insert($table,$data);

		createAnswer('answer', ['questionID' => $isInsert, 'rightAnswer' => $answer]);

	}

	function createAnswer($table,$data){
		$db = Database::getInstance("localhost","kahoot","root","");
		$isInsert = $db -> insert($table, $data);
		return $isInsert;
	}
 ?>
