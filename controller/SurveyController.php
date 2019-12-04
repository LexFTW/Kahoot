<?php
	include "../model/Database.php";

  function getSurvey(){
    $db = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd");
    $surveis = $db->select2("SELECT * FROM survey where userID=".$_SESSION['userID'].";");

    $surveisArray=[];
	$surveyQuery = $surveis->fetch();

  	while ( $surveyQuery ) {
	   array_push($surveisArray,$surveyQuery);
	   $surveyQuery = $surveis->fetch();
	}
    return $surveisArray;

  }

