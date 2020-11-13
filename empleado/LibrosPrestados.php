<?php
include('Header.php');
include('menuEm.php');
?>



<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Libros de Bosquecillo </h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Libros</a></li>
								<li class="breadcrumb-item active" aria-current="page">Aceptar Devolución</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>



			<!-- Checkbox select Datatable End -->
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Libros Prestados</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">Name</th>
								<th>Age</th>
								<th>Office</th>
								<th>Address</th>
								<th>Start Date</th>
								<th> </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table-plus">Gloria F. Mead</td>
								<td>25</td>
								<td>Sagittarius</td>
								<td>2829 Trainer Avenue Peoria, IL 61602 </td>
								<td>29-03-2018</td>
								<td>
									<div class="dropdown">
										<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
											Acciones
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" data-toggle="modal" data-target="#modal1">Ver más</a>
											<a class="dropdown-item" data-toggle="modal" data-target="#confirmation-modal">Aceptar</a>
										</div>
									</div>

								</td>

							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- Export Datatable End -->
		</div>
		<div class="footer-wrap pd-20 mb-20 card-box">
			DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
		</div>
	</div>


	<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h4 class="padding-top-30 mb-30 weight-500">¿Estas seguro de aceptar la devolución?</h4>
					<div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto;">
						<div class="col-6">
							<button type="button" class="btn btn-secondary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
							NO
						</div>
						<div class="col-6">
							<button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" data-dismiss="modal"><i class="fa fa-check"></i></button>
							SI
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<form>
					<div class="modal-header px-4">
						<h5 class="modal-title" id="exampleModalCenterTitle">Editar Profesional</h5>
					</div>
					<div class="modal-body px-4">

						<div class="form-group row mb-6">
							<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Firma</label>
							<div class="col-sm-8 col-lg-10">
								<div class="custom-file mb-1">
									<input type="file" class="custom-file-input" id="coverImage" required>
									<label class="custom-file-label" for="coverImage">Seleccione el archivo</label>
									<div class="invalid-feedback">Example invalid custom file feedback</div>
								</div>
							</div>
						</div>

						<div class="row mb-2">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="firstName">Nombres</label>
									<input type="text" class="form-control" id="firstName" value="">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<label for="lastName">Apellidos</label>
									<input type="text" class="form-control" id="lastName" value="">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mb-4">
									<label for="userName">Identificación</label>
									<input type="text" class="form-control" id="userName" value="">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mb-4">
									<label for="email">Correo</label>
									<input type="email" class="form-control" id="email" value="">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mb-4">
									<label for="Birthday">Fecha de incorporación</label>
									<input type="text" class="form-control" id="Birthday" value="01-10-1993">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mb-4">
									<label for="event">Area</label>
									<select type="text" class="form-control" id="event" value="Some value for event">
										<option>Fonoaudiologa</option>
										<option>Psicologa</option>
										<option>Terapeuta</option>
										<option>Musicoterapeuta</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer px-4">
						<button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-pill">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<script src="../TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="../TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="../TemplateAdministrador/vendors/scripts/process.js"></script>
<script src="../TemplateAdministrador/vendors/scripts/layout-settings.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="../TemplateAdministrador/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="../TemplateAdministrador/src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="../TemplateAdministrador/vendors/scripts/datatable-setting.js"></script>
</body>