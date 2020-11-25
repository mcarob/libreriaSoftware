<?php
include('Header.php');
include('menuAdmi.php');
?>

<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Mi perfil</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Incio</a></li>
									<li class="breadcrumb-item active" aria-current="page">Perfil</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-photo">
								<img src="../TemplateAdministrador/src/images/chat-img1.jpg" alt="" class="avatar-photo">
								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-body pd-5">
												<div class="img-container">
													<img id="image" src="vendors/images/photo2.jpg" alt="Picture">
												</div>
											</div>
					
										</div>
									</div>
								</div>
							</div>
							<h5 class="text-center h5 mb-0"><?php echo $admi['nom_administrador'] ?> </h5>
							<p class="text-center text-muted font-14"></p>
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Información</h5>
								<ul>
									<li>
										<span>Correo:</span>
										<?php echo $admi['correo_administrador'] ?>
									</li>
									<li>
										<span>Teléfono:</span>
										<?php echo $admi['telefono_administrador'] ?>
									</li>
									
								</ul>
							</div>
					
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Configuracion</a>
										</li>
								
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="pd-20">
                                            <div class="profile-setting">
												<form id="admipr" action="javascript: editar()">
													<ul class="profile-edit-list row">
														<li class="weight-700 col-md-10">
															<h4 class="text-blue h5 mb-20">Edición de la información personal</h4>
															<div class="form-group">
																<label>Nombre completo</label>
																<input class="form-control form-control-lg" type="text" id="nombre"  name="nombre" value="<?php echo $admi['nom_administrador'] ?>">
															</div>
															<div class="form-group">
																<label>Correo</label>
																<input class="form-control form-control-lg" type="text" id="correo" name="correo" value="<?php echo $admi['correo_administrador'] ?>">
																<input type="hidden" id="id_usu" name="id_usu" value="<?php echo $cod_usu ?>">

															</div>
															<div class="form-group">
																<label>Teléfono</label>
																<input class="form-control form-control-lg" id="telefono" name="telefono" type="text" value="<?php echo $admi['telefono_administrador'] ?>">
															</div>
															<div class="form-group">
																<label>Contraseña actual</label>
																<input class="form-control form-control-lg"  id="contraActual" name="contraActual" type="password">
															</div>
															<div class="form-group">
																<label>Contraseña nueva</label>
																<input class="form-control form-control-lg"  id="contraNueva" name="contraNueva" type="password">
															</div>
															<div class="form-group">
																<label>Repetir contraseña nueva</label>
																<input class="form-control form-control-lg" id="repeticion" name="repeticion" type="password">
															</div>
															<div class="form-group">

																<br>
																<button type="submit" class='btn btn-outline-success'>Agregar</button>
															</div>
												
														</li>
													</ul>
												</form>
											</div>
											</div>
										</div>
										
										
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
    </div>
	
	<script>
	function editar() {
		datos = $('#admipr').serialize();

		$.ajax({
			type: "POST",
			data: datos,
			url: "Ac.php?action=" + "perfilA",
			success: function(r) {
				console.log(r);
				if (r == 3) {
					swal({
						type: 'error',
						title: 'Oops...',
						text: '¡El correo ya existe!',
						showConfirmButton: false,
						timer: 2000
					})

				} else if (r == 1) {
					swal({
						type: 'success',
						title: '¡Se editó correctamente!',
						showConfirmButton: false,
						timer: 2000
					})
					location.reload();
				} else if (r == 4) {
					swal({
						type: 'error',
						title: 'Oops...',
						text: '¡Las contraseñas no coinciden!',
						showConfirmButton: false,
						timer: 2000
					})
				} else if (r == 45) {
					swal({
						type: 'error',
						title: 'Oops...',
						text: '¡Debes colocar la contraseña actual!',
						showConfirmButton: false,
						timer: 2000
					})
				}else if (r == 8) {
					swal({
						type: 'error',
						title: 'Oops...',
						text: '¡La contraseña es incorrectal!',
						showConfirmButton: false,
						timer: 2000
					})
				}

				
			}
		});
	}
</script>

<script src="../TemplateAdministrador/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="../TemplateAdministrador/src/plugins/sweetalert2/sweet-alert.init.js"></script>
