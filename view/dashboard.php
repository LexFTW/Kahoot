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
							<p>Kahoots (0)</p>
							<div class="card">
								<table class="table table-responsive-sm">
									<tbody>
										<tr>
											<td class="align-middle">Kahoot 1</td>
											<td class="align-middle">
												<button type="button" class="btn ml-2 btn-primary float-right" name="button">
													<i class="fas fa-edit"></i>
												</button>
												<button type="button" class="btn btn-success float-right" name="button">
													<i class="fas fa-play"></i>
												</button>
											</td>
										</tr>
										<tr>
											<td class="align-middle">Kahoot 2</td>
											<td class="align-middle">
												<button type="button" class="btn ml-2 btn-primary float-right" name="button">
													<i class="fas fa-edit"></i>
												</button>
												<button type="button" class="btn btn-success float-right" name="button">
													<i class="fas fa-play"></i>
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
      </div>
    </main>
  </body>
