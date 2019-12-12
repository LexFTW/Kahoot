<?php

include '../models/Database.php';

class PullController{

  public function getPulls(){
    $database = Database::getInstance("localhost","kahoot","alexis","1234");
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

  public function create($name){
    $database = Database::getInstance("localhost","kahoot","root","");
    $data = [
      'userID' => '1',
      'name' => $name
    ];

    $database->insert('survey', ['(userID, name)', '(:userID, :name)'], $data);



  }

}


?>
