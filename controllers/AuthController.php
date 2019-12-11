<?php

include '../models/Database.php';
include '../models/Auth.php';

class AuthController{

    function login($email, $password){
      try{
        $database = Database::getInstance('localhost', 'Kahoot', 'root', '');
        $login = $database->select("select * from user where email = '". $email . "' and password = SHA2('" .$password."',512);", ['id', 'name', 'email']);

        if(isset($login)){
          $auth = new Auth;
          $auth->setId($login[0]['id']);
          $auth->setName($login[0]['name']);
          $auth->setEmail($login[0]['email']);

          return $auth;
        }
      }catch(Exception $e){
        echo $e->getMessage();
      }

      return NULL;
    }

}

 ?>
