<?php

include '../controllers/PollController.php';
include '../models/Auth.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  if(empty($_SESSION['auth'])){
    header('Location: login.php');
    die();
  }

  $poll = new PollController;
  $polls = $poll->getPolls($_SESSION['auth']->getId());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['crud'])){
    $id_poll = $_POST['id_poll'];
    $poll = new PollController;
    $poll->removePoll($id_poll);

    header('Location: dashboard.php');
    die();
  }else{
    if(isset($_POST['id_poll'])){
      $_SESSION['id_poll'] = $_POST['id_poll'];
    }else if(isset($_POST['name_poll'])){
      $data = [
        'id_user' => $_SESSION['auth']->getId(),
        'name_poll' => $_POST['name_poll']
      ];

      $poll = new PollController;
      $polls = $poll->create($data);

      $id_poll = $poll->getLastPollId();
      $_SESSION['id_poll'] = $id_poll;
    }

    header('Location: create_questions.php');
    die();
  }

}

 ?>
