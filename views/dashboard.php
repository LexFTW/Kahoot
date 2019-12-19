<?php

  include 'layouts/head.php';
  include '../routes/DashboardRoute.php';

 ?>
  <script src="../public/js/PollScript.js" charset="utf-8"></script>
  <body>
    <?php include 'layouts/nav.php' ?>
    <main class="container-fluid dashboard__container">
      <div class="row">
				<div class="dashboard__main col-md-12 pl-0 pr-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
              <li class="breadcrumb-item active" aria-current="page"> <i class="fas fa-home"></i> </li>
            </ol>
          </nav>
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
                        '<form action="lobby_admin.php" method="post" class="d-inline">' .
                        '<input type="hidden" name="surveyId" value="'.$poll['id_poll'].'" />' .
                        '<button type="submit" class="btn btn-success float-right">' .
                        '<i class="fas fa-play"></i>' .
                        '</button>' .
                        '</form>' .
                        '<form method="post" class="d-inline">' .
                        '<input type="hidden" name="id_poll" value="'.$poll['id_poll'].'" />' .
                        '<button type="submit" class="btn btn-primary float-right mr-3">' .
                        '<i class="fas fa-edit"></i>' .
                        '</button>' .
                        '</form>' .
                        '<form method="post" class="d-inline">' .
                        '<input type="hidden" name="crud" value="remove" />' .
                        '<input type="hidden" name="id_poll" value="'.$poll['id_poll'].'" />' .
                        '<button type="submit" class="btn btn-danger float-right mr-3">' .
                        '<i class="fas fa-times"></i>' .
                        '</button>' .
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
