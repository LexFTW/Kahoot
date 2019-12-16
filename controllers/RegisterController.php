<?php

include '../models/Database.php';
include '../models/Register.php';

class RegisterController{

    function register($data){
      try{
        $database = Database::getInstance();
        return $database->insert('INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, SHA2(:password, 512));', $data);

      }catch(Exception $e){
        echo $e->getMessage();
      }

      return false;
    }
}

 ?>
