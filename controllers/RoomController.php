<?php

include '../models/Database.php';

class RoomController{

    public function createRoom($data){
      $database = Database::getInstance();
      return $database->insert('INSERT INTO rooms (id_poll, id_user, pin, status) VALUES (:id_poll, :id_user, :pin, :status)', $data);
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

    function generateCodePin(){
      $pin = '';
      for ($i=0; $i < 4; $i++) {
        $pin = $pin . random_int(0, 9);
      }

      return $pin;
    }
}


?>
