<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
$CDocumentos = new ControladorDocumento();
$fisicos = $CDocumentos->listarDocumentoF();
?>
<div class="mobile-menu-overlay"></div>

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
								<li class="breadcrumb-item"><a href="index.html">Empleados</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listar</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>



			<!-- Checkbox select Datatable End -->
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Libros Fisicos</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">Titulo</th>
								<th>Publicador</th>
								<th>Editorial</th>
								<th>Código ISBN</th>
								<th>Tipo de documento</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($fisicos as $key) {
								echo ("<tr>");
								echo ("<td>" . $key['titulo_documento'] . "</td>");
								echo ("<td>" . $key['nom_publicador'] . "</td>");
								echo ("<td>" . $key['editorial_publicacion'] . "</td>");
								echo ("<td>" . $key['codigo_isbn'] . "</td>");
								echo ("<td>" . $key['nom_tipo_documento'] . "</td>");
								echo ("<td>
								<div class='btn-list'>	
									<button type='button' class='btn btn-outline-success' onclick='verMas(" . '"' . $key['cod_documento'] . '"' . ")'>Ver más</button>
									</div>
								</td>");


							?>

							<?php
								echo ("</tr>");
							}
							?>



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


<script>
	function verMas(valor) {
		$('#modal1').modal('show');
		variableCod = valor;
	}
</script>

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