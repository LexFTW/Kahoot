<?php

include 'layouts/head.php';
include '../routes/GameRoute.php';

 ?>

 <body class="animation">
   <main class="container-fluid">
     <div class="anonym">
       <div class="card lobby__card">
         <div class="card-body lobby__body">
           <h2 class="text-center mb-2 lobby__title"><?php echo $questions[0]['title_question'] ?></h2>
           <?php

           print_r($answers);
            ?>
         </div>
       </div>
     </div>
   </main>
 </body>
