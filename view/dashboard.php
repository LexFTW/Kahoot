<?php
 include '../controller/SurveyController.php';
 $surveis = getSurvey();

 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<?php include 'layouts/links.php' ?>
	</head>
  <body>
    <?php include 'layouts/nav.php' ?>
    <main class="container-fluid dashboard__container">
      <div class="row">
				<?php include 'layouts/sidebar.php' ?>
				<div class="dashboard__main offset-3 col-md-9">
					<div class="card dashboard_main_card mt-3">
						<div class="card-body">
							<p><b>Kahoots (<?php echo count($surveis); ?>)</b></p>
							<div class="card">
								<table class="table table-responsive-sm">
									<tbody>
										<?php
											foreach ($surveis as $survey) {
												echo '<tr>' .
												  '<td class="align-middle">'.$survey.'</td>' .
													'<td class="align-middle">' .
												  '<a href="#" role="button" class="btn ml-2 btn-primary float-right" name="button">' .
												  '<i class="fas fa-edit"></i>' .
												  '</a>' .
												  '<button type="button" class="btn btn-success float-right" name="button">' .
												  '<i class="fas fa-play"></i>' .
												  '</button>' .
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
