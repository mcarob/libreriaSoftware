<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
$CDocumentos = new ControladorDocumento();
$digitales = $CDocumentos->listarDocumentoD();
?>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Documentos de Bosquecillo </h4>
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
					<h4 class="text-blue h4">Documentos Digitales</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th class="table-plus datatable-nosort">Titulo</th>
								<th>Publicador</th>
								<th>Editorial</th>
								<th>Código</th>
								<th>Tipo de documento</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
								<?php
								foreach ($digitales as $key) {
									echo ("<tr>");
									echo ("<td>" . $key['titulo_documento'] . "</td>");
									echo ("<td>" . $key['nom_publicador'] . "</td>");
									echo ("<td>" . $key['editorial_publicacion'] . "</td>");
									if ($key['cod_tipo_documento'] == 2) {
										echo ("<td>" . $key['informacion_ssn'] . "</td>");
									} else {
										echo ("<td>" . $key['informacion_bib'] . "</td>");
									}
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