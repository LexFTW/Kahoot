<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<?php 
		include 'layouts/links.php'; 
		include '../controller/SurveyController.php';
		include '../controller/startPlayAdminController.php';
		include '../controller/editController.php';
 		$surveis = getSurvey();
		if (isset($_GET['play'])){
		    $_SESSION['surveyID']=$_GET['play'];
		    createPin();
		    header("Location: playAdmin.php");
		}
		if (isset($_GET['edit'])){
			$_SESSION['editSurvey']=$_GET['edit'];
			header("Location: editSurvey.php");
		}

		?>
	</head>
  <body>
    <?php include 'layouts/nav.php'
     ?>
    <main class="container-fluid dashboard__container">
      <div class="row">
				<?php include 'layouts/sidebar.php'; ?>
				<div class="dashboard__main offset-3 col-md-9">
					<div class="card dashboard_main_card mt-3">
						<div class="card-body">
							<div class="row">
				                <div class="col-md-6 mb-4">
				                  <b>Kahoots (<?php echo count($surveis); ?>)</b>
				                </div>
				                <div class="col-md-6 mb-4">
				                  <form action="create.php" method="post">
				                    <input type="submit" class="btn btn-warning float-right" value="Crear">
				                  </form>
				                </div>
				              </div>
							<div class="card">
								<table class="table table-responsive-sm">
									<tbody>
										<?php
										
											foreach ($surveis as $survey) {
												echo '<tr>' .
												  '<td class="align-middle">'.$survey['name'].'</td>' .
													'<td class="align-middle">' .
												  '<a href="dashboard.php?edit='.$survey['id'].'" role="button" class="btn ml-2 btn-primary float-right" name="button">' .
												  '<i class="fas fa-edit"></i>' .
												  '</a>' .												 
												  '<a href="dashboard.php?play='.$survey['id'].'" role="button" class="btn ml-2 btn-success float-right" name="button">' .
												  '<i class="fas fa-play"></i>' .
												  '</a>'.
												  '</td>' .
													'</tr>';
											}

										 ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
      </div>
    </main>
  </body>
