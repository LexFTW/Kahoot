<?php

include '../models/Database.php';

class PinCodeController{

  public function pin($pin){
    $database = Database::getInstance('localhost', 'Kahoot', 'rogeraws', 'P@ssw0rd');
    $data = [
      'pin' => $pin
    ];
    $pin = $database->select('SELECT * FROM room WHERE pin=:pin;', $data);

    return count($pin);
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
