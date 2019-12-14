<?php

  include 'layouts/head.php';
  include '../routes/DashboardRoute.php';

 ?>
  <script src="../public/js/PollScript.js" charset="utf-8"></script>
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
                  <b>Kahoots (<?php echo count($polls) ?>)</b>
                </div>
                <div class="col-md-6 mb-4">
                  <button type="button" name="button" onclick="createPoll()" class="btn btn-warning float-right">Crear Kahoot</button>
                </div>
              </div>
							<div class="card">
								<table class="table table-responsive-sm">
									<tbody>
                    <?php
                      foreach ($polls as $poll) {
                        echo '<tr>' .
                        '<td class="align-middle">'.$poll['name_poll'].'</td>' .
                        '<td class="align-middle">' .
                        '<form action="lobby_admin.php" method="post">' .
                        '<input type="hidden" name="surveyId" value="'.$poll['id_poll'].'" />' .
                        '<input type="submit" class="btn btn-success float-right" value="Jugar">' .
                        '</input>' .
                        '</form>' .
                        '<form method="post">' .
                        '<input type="hidden" name="id_poll" value="'.$poll['id_poll'].'" />' .
                        '<input type="submit" value="Editar" class="btn btn-primary float-right mr-3" />' .
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
