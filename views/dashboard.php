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
                  <b>Kahoots (<?php echo $_SESSION['auth'] ?>)</b>
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
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
      </div>
    </main>
  </body>
