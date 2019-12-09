<?php
	include "../model/Database1.php";

  function getSurvey(){
    $db = Database::getInstance("localhost","kahoot","kahoot","P@ssw0rd");
    $surveis = $db->select2("SELECT * FROM survey where userID=".$_SESSION['userID'].";");
        
    return $surveis;

  }

