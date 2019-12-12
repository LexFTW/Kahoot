<?php

include '../controllers/PollController.php';
include '../models/Auth.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
  if(empty($_SESSION['auth'])){
    header('Location: login.php');
    die();
  }

  $poll = new PollController;
  $polls = $poll->getPolls($_SESSION['auth']->getId());

}


 ?>
