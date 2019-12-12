<?php

include '../controllers/RoomController.php';

session_start();

if(empty($_SESSION['pin'])){
  header('Location: index.php');
}

$url = $_SERVER['REQUEST_URI'];
header("Refresh: 15; URL = $url");

$room = new RoomController;
$players = $room->getPlayers($_SESSION['pin']);



 ?>
