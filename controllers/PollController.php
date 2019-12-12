<?php

include '../models/Database.php';

class PollController{

  public function getPolls($id_user){
    $database = Database::getInstance();
    $data = [
      'id_user' => $id_user
    ];
    return $database->select('SELECT * FROM polls WHERE id_user = :id_user', $data);
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
      'id_user' => '1',
      'name_poll' => $name
    ];

    return $database->insert('INSERT INTO polls (id_user, name_poll) VALUES (:id_user, :name_poll)', $data);
  }

}


?>
