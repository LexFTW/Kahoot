<?php

function generateCodePin($id){
  $pin = '';

  for ($i=0; $i < 4; $i++) {
    $pin = $pin . random_int(0, 9);
  }

  return $pin;
}

function createRoom($id, $pin){
  $db = Database::getInstance("localhost","kahoot","root","");
  $isInsert = $db -> insert('room', ['surveyID' => $id, 'userID' => '1', 'pin' => $pin]);
}



?>
