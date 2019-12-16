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

  public function getPollName($id_poll){
    $database = Database::getInstance();
    $data = [
      'id_poll' => $id_poll
    ];

    return $database->select('SELECT name_poll FROM polls WHERE id_poll = :id_poll', $data);
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
  }

  public function createAnswer($data){
    $database = Database::getInstance();
    return $database->insert('INSERT INTO answers (id_question, name_answer, correct) VALUES (:id_question, :name_answer, :correct)', $data);
  }

  public function create($data){
    $database = Database::getInstance();

    return $database->insert('INSERT INTO polls (id_user, name_poll) VALUES (:id_user, :name_poll)', $data);
  }

  public function getLastPollId(){
    $database = Database::getInstance();
    return $database->getLastId();
  }

  function changeImage($id_question, $image_name){
    try{
      $database = Database::getInstance();
      $data = [
        'image' => $image_name,
        'id_question' => $id_question
      ];
      return $database->update('UPDATE questions SET image = :image WHERE id_question = :id_question', $data);
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }

}


?>
