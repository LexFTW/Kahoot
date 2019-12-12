<?php

  include 'layouts/head.php';
  include '../routes/DashboardRoute.php';

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
                <div class="col-md-6 mb-4">
                  <b>Kahoots (<?php echo count($pulls) ?>)</b>
                </div>
                <div class="col-md-6 mb-4">
                  <a href="create_pull.php" class="btn btn-warning float-right">Crear</a>
                </div>
              </div>
							<div class="card">
								<table class="table table-responsive-sm">
									<tbody>
                    <?php
											for ($i=0; $i < count($pulls); $i++) {
                        echo '<tr>' .
                        '<td class="align-middle">'.$pulls[$i]['name'].'</td>' .
                        '<td class="align-middle">' .
                        '<a href="#" role="button" class="btn ml-2 btn-primary float-right" name="button">' .
                        '<i class="fas fa-edit"></i>' .
                        '</a>' .
                        '<form action="play.php" method="post">' .
                        '<input type="hidden" name="surveyId" value="'.$pulls[$i]['id'].'" />' .
                        '<input type="submit" class="btn btn-success float-right" value="Jugar">' .
                        '</input>' .
                        '</form>' .
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
