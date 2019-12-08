<?php
	include "../model/Database.php";

  function getSurvey(){
    $db = Database::getInstance("localhost","kahoot","root","");
    $query = "SELECT * FROM survey";
    return $db->select($query, ['id', 'name']);
  }
