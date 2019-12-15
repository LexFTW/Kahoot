<?php

include 'layouts/head.php';
include '../routes/ProfileRoute.php';

 ?>
 <body>
   <?php include 'layouts/nav.php' ?>
   <main class="container-fluid dashboard__container">
     <div class="row">
       <?php include 'layouts/sidebar.php' ?>
       <div class="dashboard__main offset-md-3 col-md-9">
         <div class="card dashboard_main_card mt-3">
           <div class="card-body">
             <div class="row">
              <div class="card">
                <div class="card-body">
                  <?php  
                      echo "<img class='profile__imgEdit' src='../public/img/profile_image/".$_SESSION['auth']->getImage()."'></img>"
                  ?>  
                </div>
              </div>
               <div class="card">
                  <div class="card-body">
                    <div>

                      
                    </div>
                      <form method="POST" enctype="multipart/form-data">
                        <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                        <input type="submit">
                      </form>
                  </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </main>
 </body>
