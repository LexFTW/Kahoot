<?php

  include '../controllers/PollController.php';
  include '../models/Auth.php';

  session_start();

  $poll = new PollController;

  if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $polls = $poll->getPolls($_SESSION['auth']->getId());
  }else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['new_poll'])){
      $insertPoll = $poll->create($_POST['new_poll']);
    }else{
      echo $_POST['polls'];
    }
  }


 ?>
