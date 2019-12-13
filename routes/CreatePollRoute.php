<?php

  include '../controllers/PollController.php';
  include '../models/Auth.php';

  session_start();

  $poll = new PollController;
  $questions = $poll->getQuestions(1);

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    createQuestion();
  }

  function createQuestion(){
    if($_POST['type_question'] == 1){
      insertQuestionTrueOrFalse();
    }else{

    }
  }

  function insertQuestionTrueOrFalse(){
    if(empty($_POST['title_question'])){
      showMessageError('La campo de la pregunta es obligatorio.');
    }else{
      $poll = new PollController;
      $data = [
        'id_poll' => '1',
        'id_user' => $_SESSION['auth']->getId(),
        'title_question' => $_POST['title_question'],
        'type_question' => $_POST['type_question']
      ];

      $isInsert = $poll->createQuestion($data);
      if($isInsert == 1){
        showMessageSuccess('Se ha creado la pregunta correctamente!');
        $questions = $poll->getQuestions(1);
      }
    }
  }

  function showMessageError($string){
    echo '<script>window.addEventListener("load", function(){' .
      'document.getElementsByClassName("alert")[0].style.display = "block";'.
      'document.getElementsByClassName("alert")[0].innerHTML += "'.$string.'"})</script>';
  }

  function showMessageSuccess($string){
    echo '<script>window.addEventListener("load", function(){' .
      'document.getElementsByClassName("alert")[1].style.display = "block";'.
      'document.getElementsByClassName("alert")[1].innerHTML += "'.$string.'"})</script>';
  }

 ?>
