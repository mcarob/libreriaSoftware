	<!doctype html>
	<html class="no-js" lang="zxx">
	<?php
			include("header.php");
			?>
	<body>
		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- Main wrapper -->
		<div class="wrapper" id="wrapper">
			<!-- Header -->
			<?php
			include("menu.php");
			?>
			<!-- //Header -->
			<!-- Start Search Popup -->

			<!-- End Search Popup -->
			<!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area bg-imagenindex--6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">Ingresar a la Plataforma</h2>
								<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.html">Inicio</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">Ingresar</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->
			<!-- Start My Account Area -->
			<section class="my_account_area pt--80 pb--55 bg--white">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="my__account__wrapper">
								<h3 class="account__title">Iniciar sesión</h3>
								<form action="" method="POST">
									<div class="account__form">
										<div class="input__box">
											<label>Usuario<span>*</span></label>
											<input type="text" class="form-control input-lg" id="username" name="username" placeholder="Usuario">
										</div>
										<div class="input__box">
											<label>Contraseña<span>*</span></label>
											<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Contraseña">
										</div>
										<div class="form__btn">
											<button>Ingresar</button>
											<label class="label-for-checkbox">

											</label>
										</div>
										<?php

										if (isset($errorEntrada)) {
										echo  $errorEntrada;
										}
										?>
										<a class="forget_pass" href="#">¿Olvidaste tu Contraseña?</a>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="my__account__wrapper">
								<h3 class="account__title">Registrarse</h3>
								<form action="#">
									<div class="account__form">
										<div class="input__box">
											<label>Correo Electrónico <span>*</span></label>
											<input type="email">
										</div>
										<div class="input__box">
											<label>Contraseña<span>*</span></label>
											<input type="password">
										</div>
										<div class="input__box">
											<label>Confirmar Contraseña<span>*</span></label>
											<input type="password">
										</div>
										<div class="form__btn">
											<button>Registrarse</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End My Account Area -->
			<!-- Footer Area -->
			<?php
			include('footer.php')
			?>
			<!-- //Footer Area -->
			
		</div>
		<!-- //Main wrapper -->

		
	</body>
	</html>