<?php

include '../models/Database.php';
include '../models/Auth.php';

class AuthController{

    function login($email, $password){
      try{
        $database = Database::getInstance();
        $data = [
          'email' => $email,
          'password' => $password
        ];

        $login = $database->select("SELECT * FROM `user` where email=:email and password=SHA2(:password, 512);", $data);

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
