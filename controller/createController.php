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

	function createSurvey($table,$data){
		$name = $data['name'];
		$isInsert = "";
		$db = Database::getInstance("localhost","kahoot","root","");
		$existe = $db -> select("SELECT * FROM " . $table . " where name = '" . $name."'",["name"]);
		if(count($existe) == 0 ){
			$isInsert = $db -> insert($table, $data);
		}

		$survey = $db -> $existe = $db -> select("SELECT * FROM " . $table . " where name = '" . $name."'",["id"])[0]['id'];

		return $survey;
	}
 ?>
