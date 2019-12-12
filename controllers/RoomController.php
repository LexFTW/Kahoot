<?php

include '../models/Database.php';

class RoomController{

    public function createRoom($id, $pin){
      $database = Database::getInstance();
      $data = [
        'surveyID' => $id,
        'userID' => '1',
        'pin' => $pin,
        'status' => 'playing'
      ];
      $database->insert('room', ['(surveyID, userID, pin, status)', '(:surveyID, :userID, :pin, :status)'], $data);
    }

    public function createAnonym($name){
      $database = Database::getInstance();
      $data = [
        'pin' => $_SESSION['pin']
      ];
      $room = $database->select('SELECT * FROM room WHERE pin = :pin;', $data)[0]['id'];
      $data = [
        'roomID' => $room,
        'name' => $name
      ];
      return $database->insert('INSERT INTO player (roomID, name) VALUES (:roomID, :name);', $data);
    }

    function getPlayers($pin){
      $database = Database::getInstance();
      $data = [
        'pin' => $_SESSION['pin']
      ];
      $room = $database->select('SELECT * FROM room WHERE pin = :pin;', $data)[0]['id'];

      $data = [
        'roomID' => $room
      ];

      return $database->select('SELECT * FROM player WHERE roomID = :roomID', $data);
    }
}


?>
