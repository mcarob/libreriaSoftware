<!doctype html>
<html class="no-js" lang="zxx">


<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<?php
		include("header.php");
	?>



		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area_general_nav bg-image--6">
		</div>


		<br>
		<div style=" display: flex;
		align-items: center;
		justify-content: center;" class="container">
			<div class="col-lg-8">
				<nav class="bradcaump-content">
					<div class="card card-default">
						<div class="card-body">
							<ul class="nav nav-pills nav-fill">
								<li class="nav-item">
									<a class="nav-link active" href="#">Libro</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Presentación</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Articulo</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent4">
								<div class="tab-pane pt-3 fade show active" id="home3" role="tabpanel"
									aria-labelledby="home3-tab">

									<form autocomplete="off" id="formNuevoLibro" action="" method="POST">
										<!--    esto es algo comentado--->

										<div class="wizard-card">
											<br>
											<br>
											<div class="picture-container">
												<div class="picture">
													<img src="assetsCliente/images/icons/default-avatar1.png"
														class="picture-src" id="wizardPicturePreview" title="" />
													<input type="file" id="portada" name="portada" required>
												</div>
												<h6>Elegir portada del titulo</h6>
											</div>
											<br>
											<br>
											<div class="row">
												<div class="col-md-4" aling="align-items-center">
													<div class="form-group">
														<label>Titulo del libro:</label>
														<input class="form-control" id="titulo" name="titulo">
														</input>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Fecha de publicacion:</label>
														<input class="form-control" id="fechaPublicacion"
															name="fechaPublicacion">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Autor:</label>
														<input class="form-control" id="fechaPublicacion"
															name="fechaPublicacion">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>ISBN:</label>
														<input class="form-control" id="fechaPublicacion"
															name="fechaPublicacion">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Mes de publicacion:</label>
														<input class="form-control" id="fechaPublicacion"
															name="fechaPublicacion">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label>Dia de publicacion:</label>
														<input class="form-control" id="fechaPublicacion"
															name="fechaPublicacion">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label>ISBN:</label>
														<input class="form-control" id="fechaPublicacion"
															name="fechaPublicacion">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														
														<label class="control control-checkbox checkbox-success">Tipo de formato:</label>
														
															<div class="input-group md-4">
																<select class="custom-select" id="inputGroupSelect02">
																	<option value="1" selected>Físico</option>
																	<option value="2">Digital</option>
																</select>
																<div class="input-group-append">
																	<label class="input-group-text"
																		for="inputGroupSelect02">Formato</label>
																</div>
															</div>
													</div>
												</div>
											</div>
										</div>
									</form>

								</div>

								<div class="form-footer " style="float: right;">
									<input type="submit" class="btn btn-primary btn-default" value="Registrar"></input>
								</div>

							</div>
						</div>
						<!--  fin del primer tab-->
					</div>
				</nav>

				<div class="tab-pane pt-3 fade" id="profile3" role="tabpanel" aria-labelledby="profile3-tab">
					<?php include_once 'registro_estudiante.php'; ?>
				</div>
			</div>
		</div>

	<!-- End Portfolio Area -->
	<!-- Footer Area -->
	<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
		<div class="footer-static-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer__widget footer__menu">
							<div class="ft__logo">
								<a href="index.html">
									<img src="images/logo/3.png" alt="logo">
								</a>
								<p>There are many variations of passages of Lorem Ipsum available, but the
									majority have suffered duskam alteration variations of passages</p>
							</div>
							<div class="footer__content">
								<ul class="social__net social__net--2 d-flex justify-content-center">
									<li><a href="#"><i class="bi bi-facebook"></i></a></li>
									<li><a href="#"><i class="bi bi-google"></i></a></li>
									<li><a href="#"><i class="bi bi-twitter"></i></a></li>
									<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
									<li><a href="#"><i class="bi bi-youtube"></i></a></li>
								</ul>
								<ul class="mainmenu d-flex justify-content-center">
									<li><a href="index.html">Trending</a></li>
									<li><a href="index.html">Best Seller</a></li>
									<li><a href="index.html">All Product</a></li>
									<li><a href="index.html">Wishlist</a></li>
									<li><a href="index.html">Blog</a></li>
									<li><a href="index.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright__wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="copyright">
							<div class="copy__right__inner text-left">
								<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free
										themes Cloud.</a> All Rights
									Reserved</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="payment text-right">
							<img src="images/icons/payment.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //Footer Area -->


	</div>
	</div>
	<!-- //Main wrapper -->



	<?php
		include('footer.php')
		?>
	<script>
		// Prepare the preview for profile picture
		$("#wizard-picture").change(function () {
			readURL(this);
		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
</body>

</html>