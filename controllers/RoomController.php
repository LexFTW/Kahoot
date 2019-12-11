<?php

include '../models/Database.php';

class RoomController{

    public function createRoom($id, $pin){
      $database = Database::getInstance('localhost', 'Kahoot', 'root', '');
      $data = [
        'surveyID' => $id,
        'userID' => '1',
        'pin' => $pin,
        'status' => 'playing'
      ];
      $database->insert('room', ['(surveyID, userID, pin, status)', '(:surveyID, :userID, :pin, :status)'], $data)
    }

    public function createAnonym($name){
      $database = Database::getInstance('localhost', 'Kahoot', 'root', '');

      $data = [
        'pin' => $_SESSION['pin']
      ];
      
      $database->select('room', ['pin=:pin'], $data);

      $query = "SELECT id FROM `player` where roomID=:roomID and name=:name ;"
      $stm2 = $pdo->prepare($query);
  		$stm2->execute($data);

      $isInsert = $database -> insert('room', ['(roomID, name)', '(:roomID, :name)'], $data);
    }

    function getPlayers($pin){
      $database = Database::getInstance('localhost', 'Kahoot', 'root', '');
      $query = 'SELECT * FROM room WHERE pin = '.$pin.'';
      $idRoom = $database->select($query, ['id'])[0]['id'];

      $query = 'SELECT * FROM player WHERE roomID = '.$idRoom.'';
      return $database->select($query, ['name']);
    }
}


?>
