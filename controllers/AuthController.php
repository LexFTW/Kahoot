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

        $login = $database->select("SELECT * FROM `users` where email=:email and password=SHA2(:password, 512);", $data);

        if(!empty($login)){
          $auth = new Auth;
          $auth->setId($login[0]['id_user']);
          $auth->setName($login[0]['firstname'] . ' ' . $login[0]['lastname']);
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
