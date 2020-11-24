<?php
include ('Header.php');
include ('menuEm.php');
?>

<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-10">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="../TemplateAdministrador/vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Bienvenido de nuevo <div class="weight-600 font-30 text-blue"><?php echo $empleado['nom_empleado'] ?></div>
						</h4>
						<p class="font-18 max-width-600">Esta es la nueva plataforma de la biblioteca bosquecillo!</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<?php
	include ('Footer.php');
	?>

