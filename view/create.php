<?php

include "../controller/createController.php";

if(isset($_POST)){
	$title = $_POST['title'];
	createQuestion('question', ['surveyID' => '1', 'text' => $title]);
}

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<?php include 'layouts/links.php' ?>
		<script src="../public/js/script.js" charset="utf-8"></script>
	</head>
  <body>
    <?php include 'layouts/nav.php' ?>
    <main class="container-fluid dashboard__container">
      <div class="row">
				<?php include 'layouts/sidebar.php' ?>
        <div class="dashboard__main offset-3 col-md-9">
          <div class="card mt-4">
						<div class="card-body">
							<form action="create.php" method="post">

							</form>
						</div>
          </div>
        </div>
      </div>
    </main>
