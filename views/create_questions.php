<?php

include 'layouts/head.php';
include '../routes/CreatePollRoute.php';

 ?>
 <script src="../public/js/QuestionScript.js" charset="utf-8"></script>
 <body>
   <div class="alert alert-danger" role="alert">
     <i class="fas fa-times mr-3"></i>
     <i class="fas fa-times text-secondary float-right mr-3" onclick="document.getElementsByClassName('alert')[0].style.display = 'none'"></i>
   </div>
   <div class="alert alert-success" role="alert">
     <i class="fas fa-check mr-3"></i>
     <i class="fas fa-times text-secondary float-right mr-3" onclick="document.getElementsByClassName('alert')[1].style.display = 'none'"></i>
   </div>
   <?php include 'layouts/nav.php' ?>
   <main class="container-fluid pl-0 pr-0">
     <nav aria-label="breadcrumb">
       <ol class="breadcrumb bg-light">
         <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
         <li class="breadcrumb-item active" aria-current="page">Creación de Kahoot</li>
       </ol>
     </nav>
     <div class="row mt-4">
       <div class="col-md-3">
         <div class="card">
           <div class="card-body">
             <h2><?php echo $name_poll ?></h2>
             <select class="form-control" onchange="generateFormQuestion(this.value)">
               <option disabled selected>Selecciona el tipo de Pregunta</option>
               <option value="1">Verdadero / Falso</option>
               <option value="2">Única Respuesta</option>
             </select>
             <hr />
             <?php

             foreach ($questions as $question) {
               echo '<a href="#" class="badge badge-primary d-block mb-2 pb-2 pt-2">Pregunta '.$question['id_question'].': '.$question['title_question'].'</a>';
             }

            ?>
           </div>
         </div>
       </div>
       <div class="col-md-9">
         <div class="card bg-transparent border-0">
           <div class="card-body" id="question__main">

           </div>
         </div>
       </div>
     </div>
   </main>
 </body>
