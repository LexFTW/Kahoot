<?php

include 'layouts/head.php';
include '../routes/AnonymRoute.php';

 ?>
 <body class="animation">
   <main class="container-fluid">
     <div class="anonym">
       <div class="card anonym__card">
         <div class="card-body anonym__body">
           <img class="img-fluid mx-auto d-block" src="../public/img/a3531f69e64b18edd7599b446bb4e025f988a856.svg" alt="Logo Kahoot" title="Logo Kahoot" />
           <form method="post">
           <input class="form-control col-4 mt-4 col-xs-12 mx-auto anonym__input" type="text" name="name" placeholder="Introducir Nombre">
           <button class="btn btn-primary col-4 mt-2 col-xs-12 mx-auto btn-block anonym__button" type="submit" name="buttonAnnoymous">Entrar</button>
           </form>
         </div>
       </div>
     </div>
   </main>
 </body>
