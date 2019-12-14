<?php

include 'layouts/head.php';
include '../routes/PollRoute.php';

 ?>
 <body>
   <script src="../public/js/PollScript.js" charset="utf-8"></script>
   <div class="alert alert-danger" role="alert">
     <i class="fas fa-times mr-3"></i>
     <i class="fas fa-times text-secondary float-right mr-3" onclick="document.getElementsByClassName('alert')[0].style.display = 'none'"></i>
   </div>
   <div class="alert alert-success" role="alert">
     <i class="fas fa-check mr-3"></i>
     <i class="fas fa-times text-secondary float-right mr-3" onclick="document.getElementsByClassName('alert')[1].style.display = 'none'"></i>
   </div>
   <?php include 'layouts/nav.php' ?>
   <main class="container-fluid">
     <div class="row mt-4">
       <div class="col-md-12">
         <div class="card">
           <div class="card-body">
             <table class="table table-striped table-responsive-sm">
               <tbody>
                 <?php
                 foreach ($polls as $poll) {
                   echo '<tr>' .
                   '<td class="align-middle">'.$poll['name_poll'].'</td>' .
                   '<td class="align-middle">' .
                   '<form method="post">' .
                   '<input type="hidden" name="id_poll" value="'.$poll['id_poll'].'" />' .
                   '<input type="submit" value="Seleccionar" class="btn btn-primary float-right" />' .
                   '</form>' .
                   '</td>' .
                   '</tr>';
                 }
                ?>
               </tbody>
             </table>
             <button type="button" name="button" onclick="createPoll()" class="btn btn-primary float-right">Crear nuevo</button>
           </div>
         </div>
       </div>
     </div>
   </main>
 </body>
