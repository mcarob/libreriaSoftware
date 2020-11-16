<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPublicador.php');
$CPublicador = new ControladorPublicador();
$publicador = $CPublicador->PublicadoresSinValidar();
?>



<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Publicadores en Bosquecillo </h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Publicadores</a></li>
								<li class="breadcrumb-item active" aria-current="page">Aceptar</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>



			<!-- Checkbox select Datatable End -->
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Publicadores esperando validación</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
							<th class="table-plus datatable-nosort">Nombre</th>
								<th>Cédula</th>
								<th>Correo</th>
								<th>Pais</th>
								<th>Ciudad</th>
								<th>Dirección</th>
								<th>Telefono</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($publicador as $key) {
								echo ("<tr>");
								echo ("<td>" . $key['nom_publicador'] . "</td>");
								echo ("<td>" . $key['ced_publicador'] . "</td>");
								echo ("<td>" . $key['correo_publicador'] . "</td>");
								echo ("<td>" . $key['pais_publicador'] . "</td>");
								echo ("<td>" . $key['ciudad_publicador'] . "</td>");
								echo ("<td>" . $key['direccion_publicador'] . "</td>");
								echo ("<td>" . $key['telefono_publicador'] . "</td>");
								echo ("<td><div class='btn-list'>	
									<button type='button' class='btn btn-outline-danger' onclick='validar(" . '"' . $key['cod_usuario'] . '"' . ")'>Aceptar</button>
									</div></td>");
								 
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

<script>

		function validar(cod) {
            window.location.href = 'ac.php?action=' + "APublicador&" + "codigo=" + cod;
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