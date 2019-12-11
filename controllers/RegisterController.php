<?php

include '../models/Database.php';
include '../models/Register.php'

class RegisterController{

    function register(Register $register){
      try{
        $database = Database::getInstance('localhost', 'Kahoot', 'root', '');

      }catch(Exception $e){
        echo $e->getMessage();
      }

      return NULL;
    }

}

 ?>
