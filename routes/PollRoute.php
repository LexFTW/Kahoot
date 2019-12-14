<?php

include '../controllers/PollController.php';
include '../models/Auth.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  $poll = new PollController;
  $polls = $poll->getPolls($_SESSION['auth']->getId());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $_SESSION['id_poll'] = $_POST['id_poll'];
  header('Location: create_questions.php');
}

 ?>
