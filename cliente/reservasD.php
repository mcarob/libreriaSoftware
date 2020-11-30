<!doctype html>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPrestamoF.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/ClienteDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/controladorRegistro.php');
session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 4) {
    header("location: ../index.php");
}
include("header.php");

$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);
$codigo=$usuario->getCod_usuario();
$conCli=new ControladorCliente();
$cliente=$conCli->devolverCliente($usuario->getCod_usuario());

$PreH=$conCli->cantidadPrestamos($cliente->getCod_cliente());
$PreF=10-$PreH["cantidad_prestamos"];

$misPrestamos=$conCli->listarPrestamosDXcliente($cliente->getCod_cliente());

?>
<body>
<?php
include("menu.php");
?>	
	<div class="wrapper" id="wrapper">
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		
        <div class="ht__bradcaump__area bg-image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Mis reservas digitales</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Mis Reservas</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                                   
                            <div class="table-content wnro__table table-responsive">
                                <table id="example"  class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-name">Titulo del documento</th>
                                            <th class="product-quantity">Tipo de documento</th>
                                            <th class="product-price">Fecha de descarga</th>
                                            <th class="product-quantity">Congreso</th>
                                            <th class="product-quantity">ISBN</th>
                                            <th class="product-quantity">SSN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($misPrestamos as $pre)
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $pre["titulo_documento"] ?></td>
											<td><?php echo $pre["nom_tipo_documento"] ?></td>
                                            <td><?php echo $pre["fecha_peticion_digital"] ?></td>
                                            <?php
                                            if($pre["informacion_congreso"]==null)
                                            {
                                                echo('<td> No posee</td>');
                                            }else{
                                                echo('<td>'. $pre["informacion_congreso"].'</td>');
                                            } 
                                            ?>
                                            <?php
                                            if($pre["codigo_isbn"]==null)
                                            {
                                                echo('<td> No posee</td>');
                                            }else{
                                            echo('<td>'. $pre["codigo_isbn"].'</td>');
                                            } 
                                            ?>
                                            <?php
                                            if($pre["informacion_ssn"]==null)
                                            {
                                                echo('<td> No posee</td>');
                                            }else{
                                                echo('<td>'. $pre["informacion_ssn"].'</td>');
                                            } 
                                            ?>
                                            
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            
                        </div>
                    </div>
                </div>
            </div>  
        </div>
</body>
<?php
include("footer.php");
?>
</html>