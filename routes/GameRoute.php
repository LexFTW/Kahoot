<?php

include '../controllers/GameController.php';
include '../models/Auth.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  $game = new GameController;

  $questions = $game->getQuestions($_SESSION['pin']);
  print_r($questions);
}

?>
