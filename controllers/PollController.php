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

  public function getQuestions($id_poll){
    $database = Database::getInstance();
    $data = [
      'id_poll' => $id_poll
    ];
    return $database->select('SELECT * FROM questions WHERE id_poll = :id_poll', $data);
  }

  public function createQuestion($data){
    $database = Database::getInstance();
    return $database->insert('INSERT INTO questions (id_poll, id_user, title_question, type_question) VALUES (:id_poll, :id_user, :title_question, :type_question)',$data);

    // createAnswer('answer', ['questionID' => $isInsert, 'rightAnswer' => $answer]);
  }

  public function createAnswer($table,$data){
    $db = Database::getInstance();
    $isInsert = $db -> insert($table, $data);
    return $isInsert;
  }

  public function create($data){
    $database = Database::getInstance();

    return $database->insert('INSERT INTO polls (id_user, name_poll) VALUES (:id_user, :name_poll)', $data);
  }

}


?>
