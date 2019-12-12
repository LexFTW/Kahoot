<?php

include '../models/Database.php';

class PullController{

  public function getPulls(){
    $database = Database::getInstance();
    return $database->select('SELECT * FROM survey', NULL);
  }

  public function createQuestion($table, $data, $answer){
    $db = Database::getInstance();
    $isInsert = $db -> insert($table,$data);

    createAnswer('answer', ['questionID' => $isInsert, 'rightAnswer' => $answer]);
  }

  public function createAnswer($table,$data){
    $db = Database::getInstance();
    $isInsert = $db -> insert($table, $data);
    return $isInsert;
  }

  public function create($name){
    $database = Database::getInstance();
    $data = [
      'userID' => '1',
      'name' => $name
    ];

    $database->insert('survey', ['(userID, name)', '(:userID, :name)'], $data);



  }

}


?>
