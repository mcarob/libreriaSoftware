﻿<!doctype html>
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


	<?php
		include("menu.php");
		?>
		<!-- End Search Popup -->
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
							<ul class="nav nav-pills nav-justified nav-style-fill" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="Libro-tab" data-toggle="tab" role="tab"
                                    aria-controls="Libro" aria-selected="true" href="#Libro">Libro</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="Presentacion-tab" data-toggle="tab" role="tab"
                                    aria-controls="Presentacion"  aria-selected="false" href="#Presentacion">Presentación</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="Articulo-tab" data-toggle="tab" role="tab"
                                    aria-controls="Articulo"  aria-selected="false" href="#Articulo">Articulo</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="Autor-tab" data-toggle="tab" role="tab"
                                    aria-controls="Autor"  aria-selected="false" href="#Autor">Autor</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent4">
								<div class="tab-pane pt-3 fade show active" id="Libro" role="tabpanel" aria-labelledby="Libro-tab">

									<?php include_once 'regLibro.php'; ?>

								</div>
								<div class="tab-pane pt-3 fade" id="Presentacion" role="tabpanel" aria-labelledby="Presentacion-tab">

									<?php include_once 'regPresentacion.php'; ?>

								</div>
								<div class="tab-pane pt-3 fade" id="Articulo" role="tabpanel" aria-labelledby="Articulo-tab">

									<?php include_once 'regArticulo.php'; ?>

								</div>
								<div class="tab-pane pt-3 fade" id="Autor" role="tabpanel" aria-labelledby="Autor-tab">

									<?php include_once 'regAutor.php'; ?>

								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>

	<!-- End Portfolio Area -->
	<!-- Footer Area -->
	<!-- //Footer Area -->


	</div>

	<?php
		include('footer.php')
		?>
	</div>
	<!-- //Main wrapper -->

	<script>
		// Prepare the preview for profile picture
		
		$("#portada").change(function() {
			readURL(this);
		});

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		
		
		// $("#portadaArt").change(function() {
		// 	readURL(this);
		// });

		// function readURL(input) {
		// 	if (input.files && input.files[0]) {
		// 		var reader = new FileReader();

		// 		reader.onload = function(e) {
		// 			$('#wizardPicturePreview2').attr('src', e.target.result).fadeIn('slow');
		// 		}
		// 		reader.readAsDataURL(input.files[0]);
		// 	}
		// }

		// $("#portadaPo").change(function() {
		// 	readURL(this);
		// });

		// function readURL(input) {
		// 	if (input.files && input.files[0]) {
		// 		var reader = new FileReader();

		// 		reader.onload = function(e) {
		// 			$('#wizardPicturePreview3').attr('src', e.target.result).fadeIn('slow');
		// 		}
		// 		reader.readAsDataURL(input.files[0]);
		// 	}
		// }
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
		
        $('#example-getting-started').multiselect({
			buttonText: function(options, select) {
                return 'Ingrese un Autor';
            },
			buttonWidth: '400px',
		});
    });
</script>
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>

</html>