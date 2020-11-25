<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPrestamoF.php');
$CPF = new ControladorPrestamoFisico();
$prestamos = $CPF->listar();
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
								<th class="table-plus datatable-nosort">Nombre</th>
								<th>ISBN</th>
								<th>Correo Lector</th>
								<th>Fecha prestamo</th>
								<th>Estado</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

							<?php
							foreach ($prestamos as $key) {
								echo ("<tr>");
								echo ("<td>" . $key['nom_cliente'] . "</td>");
								echo ("<td>" . $key['codigo_isbn'] . "</td>");
								echo ("<td>" . $key['correo_cliente'] . "</td>");
								echo ("<td>" . $key['fecha_prestamo_fisico'] . "</td>");
								echo ("<td>" . $key['nombre_estado'] . "</td>");
								echo ("<td>
									<div class='dropdown'>
										<a class='btn btn-outline-primary dropdown-toggle' href='#' role='button' data-toggle='dropdown'>
											Acciones
										</a>
										<div class='dropdown-menu dropdown-menu-right'>
											<a class='dropdown-item' data-toggle='modal' onclick='vermas(" . '"' . $key['cod_prestamo_fisico'] . '"' . ")'>Ver más</a>
											<a class='dropdown-item' data-toggle='modal' onclick='verModalPrestamo(" . '"' . $key['cod_prestamo_fisico'] . '"' . ")'>Aceptar</a>
										</div>
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


	<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" id="343">
				
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">


			</div>
		</div>
	</div>

</div>
</div>



<script>
	function aceptarDevo(cod) {
		window.location.href = 'ac.php?action=' + "aceptarDevo&" + "codigo=" + cod;
	}

	function vermas(valor) {
		$('.modal-content').load('modalPrestamo.php?id=' + valor)
		$('#modal12').modal('show');
	}


	function verModalPrestamo(valor) {
		$('#343').load('modalAceptarDevo.php?id=' + valor)
		$('#confirmation-modal').modal('show');
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
