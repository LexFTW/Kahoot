<?php
	include "../model/Database.php";

  function getSurvey(){
    $db = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd");
    $query = "SELECT * FROM survey";
    $surveis = $db->select($query);

    return $surveis;

  }
