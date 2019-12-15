<?php

include '../models/Database.php';

class RoomController{

    public function createRoom($id, $pin){
      $database = Database::getInstance();
      $data = [
        'surveyID' => $id,
        'userID' => '1',
        'pin' => $pin,
        'status' => '1'
      ];
      $database->insert('room', ['(surveyID, userID, pin, status)', '(:surveyID, :userID, :pin, :status)'], $data);
    }

    public function createAnonym($name){
      $database = Database::getInstance();
      $data = [
        'pin' => $_SESSION['pin']
      ];

      $room = $database->select('SELECT * FROM rooms WHERE pin = :pin;', $data)[0]['id_room'];
      $data = [
        'id_room' => $room,
        'username' => $name
      ];
      return $database->insert('INSERT INTO players (id_room, username) VALUES (:id_room, :username);', $data);
    }

    function getPlayers($pin){
      $database = Database::getInstance();
      $data = [
        'pin' => $_SESSION['pin']
      ];
      $room = $database->select('SELECT * FROM rooms WHERE pin = :pin;', $data)[0]['id_room'];

      $data = [
        'id_room' => $room
      ];

      return $database->select('SELECT * FROM players WHERE id_room = :id_room', $data);
    }
}


?>
