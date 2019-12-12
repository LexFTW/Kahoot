<?php

include '../models/Database.php';

class PullController{

  public function getPulls(){
    $database = Database::getInstance('localhost', 'Kahoot', 'rogeraws', 'P@ssw0rd');
    return $database->select('SELECT * FROM survey', NULL);
  }

  public function createQuestion($table, $data, $answer){
    $db = Database::getInstance("localhost","kahoot","root","");
    $isInsert = $db -> insert($table,$data);

    createAnswer('answer', ['questionID' => $isInsert, 'rightAnswer' => $answer]);
  }

  public function createAnswer($table,$data){
    $db = Database::getInstance("localhost","kahoot","root","");
    $isInsert = $db -> insert($table, $data);
    return $isInsert;
  }

  public function createSurvey($table,$data){
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

}


?>
