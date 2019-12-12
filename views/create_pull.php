<?php

include 'layouts/head.php';
include '../routes/CreatePullRoute.php';

 ?>

 <body>
   <?php include 'layouts/nav.php' ?>
   <main class="container-fluid">
     <div class="row mt-4">
       <div class="col-md-3">
         <div class="card">
           <div class="card-body">
             <form method="post">
               <input list="pulls" name="pulls" class="form-control" placeholder="Selecciona el Kahoot" autocomplete="false">
               <datalist id="pulls">
                 <?php
                    foreach ($pulls as $pull) {
                      echo '<option data-value="'.$pull['id'].'" value="'. $pull['name'].'"/>';
                    }
                  ?>
              </datalist>
              <hr />
              <input type="text" name="new_pull" placeholder="Crear nuevo Kahoot" class="form-control">
              <input type="submit" class="btn btn-primary float-right mt-2" value="Crear">
             </form>
           </div>
         </div>
       </div>
       <div class="col-md-9">
         <div class="card">
           <div class="card-body" id="question__main">

           </div>
         </div>
       </div>
     </div>
   </main>
 </body>
