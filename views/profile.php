<?php

include 'layouts/head.php';
include '../routes/ProfileRoute.php';

 ?>
 <body>
   <?php include 'layouts/nav.php' ?>
   <main class="container-fluid dashboard__container">
     <div class="row">
       <div class="dashboard__main col-md-12 pl-0 pr-0">
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb bg-light">
             <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
             <li class="breadcrumb-item active" aria-current="page">Perfil: <?php echo $_SESSION['auth']->getName(); ?></li>
           </ol>
         </nav>
         <div class="card dashboard_main_card mt-3">
           <div class="card-body">
             <div class="row">
               <div class="col-md-8">
                 <div class="card">
                   <div class="card-body">
                     <?php
                     echo "<img class='profile__imgEdit d-block mx-auto' src='../public/img/profile_image/".$_SESSION['auth']->getImage()."'></img>"
                     ?>
                     <form method="post">
                       <div class="form-group">
                         <label for="">Nombre Completo</label>
                         <input type="text" name="name" value="<?php echo $_SESSION['auth']->getName() ?>" class="form-control">
                       </div>
                       <div class="form-group">
                         <label for="">Email</label>
                         <input type="text" name="name" value="<?php echo $_SESSION['auth']->getEmail() ?>" class="form-control">
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="card h-100">
                   <div class="card-body">
                     <h4 class="mb-4">Menú de Gestión</h4>
                     <button type="button" name="button" class="btn btn-primary mb-3 btn-block">Actualizar Datos</button>
                     <button type="button" name="button" class="btn btn-primary mb-3 btn-block">Cambiar Contraseña</button>
                     <button type="button" name="button" class="btn btn-primary mb-3 btn-block">Actualizar Foto de Perfil</button>
                   </div>
                 </div>
               </div>
               <!-- <div class="card">
                  <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                      <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                      <input type="submit">
                    </form>
                  </div>
               </div> -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </main>
 </body>
