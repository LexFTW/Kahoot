<?php

include '../models/Database.php';

class GameController{

    function getQuestions($pin){
      $database = Database::getInstance();

      $data = [
        'pin' => $_SESSION['pin']
      ];

      $id_poll = $database->select('SELECT * FROM rooms WHERE pin = :pin;', $data)[0]['id_poll'];

      $data = [
        'id_poll' => $id_poll
      ];

      return $database->select('SELECT * FROM questions WHERE id_poll = :id_poll', $data);

    }

    function getAnswers($id_question){
      $database = Database::getInstance();

    }

}



 ?>
