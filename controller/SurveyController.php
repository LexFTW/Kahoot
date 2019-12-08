<?php
	include "../model/Database.php";

  createSurvey("survey",["userID" => "1" , "name" => "Not stuff"]);
  function getSurvey(){
    $db = Database::getInstance("localhost","kahoot","root","");
    $query = "SELECT * FROM survey";
    return $db->select($query, ['id', 'name']);
  }

  function createSurvey($table,$data){
    $name = $data['name'];
    $isInsert = "";
  	$db = Database::getInstance("localhost","kahoot","root","");
    $existe = $db -> select("SELECT * FROM " . $table . " where name = '" . $name."'",["name"]);
    if(count($existe) == 0 ){
      $isInsert = $db -> insert($table,$data);
    }else{
      echo "no se ha insertao";
    }
    
	  return $isInsert;
  }
 ?>
