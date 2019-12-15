<?php

  include '../controllers/PollController.php';
  include '../models/Auth.php';

  session_start();

  $poll = new PollController;
  $questions = $poll->getQuestions($_SESSION['id_poll']);
  $name_poll = $poll->getPollName($_SESSION['id_poll'])[0]['name_poll'];

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    createQuestion();
  }

  function createQuestion(){
    if($_POST['type_question'] == 1){
      insertQuestionTrueOrFalse();
    }else{
      insertQuestionMultipleChoice();
    }
  }

  function insertQuestionMultipleChoice(){
    if(empty($_POST['title_question'])){
      showMessageError('La campo de la pregunta es obligatorio.');
    }else{
      $poll = new PollController;
      $data = [
        'id_poll' => $_SESSION['id_poll'],
        'id_user' => $_SESSION['auth']->getId(),
        'title_question' => $_POST['title_question'],
        'type_question' => $_POST['type_question']
      ];

      $isInsert = $poll->createQuestion($data);
      if($isInsert == 1){
        $id_question = $poll->getLastPollId();

        $data = [
            'id_question' => $id_question,
            'name_answer' => $_POST['question_one'],
            'correct' => 1
        ];

        $poll->createAnswer($data);

        $data = [
            'id_question' => $id_question,
            'name_answer' => $_POST['question_two'],
            'correct' => 0
        ];

        $poll->createAnswer($data);

        $data = [
            'id_question' => $id_question,
            'name_answer' => $_POST['question_three'],
            'correct' => 0
        ];

        $poll->createAnswer($data);

        $data = [
            'id_question' => $id_question,
            'name_answer' => $_POST['question_four'],
            'correct' => 0
        ];

        $isInsert = $poll->createAnswer($data);

        if(!empty($_POST['fileToUpload'])){
          uploadImage($id_question);
        }

        if($isInsert == 1){
          showMessageSuccess('Se ha creado la pregunta correctamente! Actualizando...');
          header("Refresh:5");
        }
      }
    }
  }

  function insertQuestionTrueOrFalse(){
    if(empty($_POST['title_question'])){
      showMessageError('La campo de la pregunta es obligatorio.');
    }else{
      $poll = new PollController;
      $data = [
        'id_poll' => $_SESSION['id_poll'],
        'id_user' => $_SESSION['auth']->getId(),
        'title_question' => $_POST['title_question'],
        'type_question' => $_POST['type_question']
      ];

      $isInsert = $poll->createQuestion($data);
      if($isInsert == 1){
        $id_question = $poll->getLastPollId();

        $data = [
            'id_question' => $id_question,
            'name_answer' => $_POST['answer'],
            'correct' => 1
        ];

        $isInsert = $poll->createAnswer($data);
        if(!empty($_POST['fileToUpload'])){
          uploadImage($id_question);
        }

        if($isInsert == 1){
          showMessageSuccess('Se ha creado la pregunta correctamente! Actualizando...');
          header("Refresh:5");
        }
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


  function uploadImage($id_question){
    $target_dir = "../public/img/kahoot_image/";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            // echo "F  ile is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            // echo "File is not an image.";
            $uploadOk = 0;
        }

      if ($uploadOk == 0) {
      }else{
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $question = new PollController;
        $question ->changeImage($id_question,$_FILES["fileToUpload"]["name"]);
      }
    }
  }

 ?>
