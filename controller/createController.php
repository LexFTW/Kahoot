<?php
	include "../model/Question.php";
	include "../model/Database.php";

	createQuestion('question',['surveyID' => '1', 'text' => "pregunta2"]);

	function createQuestion($table,$data){
		$db = Database::getInstance("localhost","kahoot","root","");
		$isInsert = $db -> insert($table,$data);
		return $isInsert;
	}
 ?>