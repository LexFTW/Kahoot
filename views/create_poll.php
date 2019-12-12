<?php

include 'layouts/head.php';
include '../routes/CreatePollRoute.php';

 ?>
 <script src="../public/js/CreateScript.js" charset="utf-8"></script>
 <body>
   <?php include 'layouts/nav.php' ?>
   <main class="container-fluid">
     <div class="row mt-4">
       <div class="col-md-3">
         <div class="card">
           <div class="card-body">
             <!-- <form method="post">
               <input list="polls" name="polls" class="form-control" placeholder="Selecciona el Kahoot" autocomplete="false">
               <datalist id="polls">
                 <?php
                    foreach ($polls as $poll) {
                      echo '<option data-value="'.$poll['id'].'" value="'. $poll['name'].'"/>';
                    }
                  ?>
              </datalist>
              <hr />
              <input type="text" name="new_poll" placeholder="Crear nuevo Kahoot" class="form-control">
              <input type="submit" class="btn btn-primary float-right mt-2" value="Crear">
             </form> -->
             <select class="form-control" onchange="generateFormQuestion(this.value)">
               <option disabled selected>Selecciona el tipo de Pregunta</option>
               <option value="1">Verdadero / Falso</option>
               <option value="2">Única Respuesta</option>
             </select>
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
