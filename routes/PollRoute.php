<?php

include '../controllers/PollController.php';
include '../models/Auth.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  $poll = new PollController;
  $polls = $poll->getPolls($_SESSION['auth']->getId());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['id_poll'])){
    $_SESSION['id_poll'] = $_POST['id_poll'];
    header('Location: create_questions.php');
    die();
  }else if(isset($_POST['name_poll'])){
    $data = [
      'id_user' => $_SESSION['auth']->getId(),
      'name_poll' => $_POST['name_poll']
    ];

    $poll = new PollController;
    $polls = $poll->create($data);

    header('Location: create_poll.php');
    die();
  }
}

 ?>
