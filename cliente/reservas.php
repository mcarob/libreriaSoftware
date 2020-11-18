<!doctype html>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPrestamoF.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/ClienteDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorUsuario.php');

include("header.php");


session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 4) {
    header("location: ../index.php");
}

$usuario=new ControladorUsuario();
$usuario->setUser($_SESSION['user']);
$codigo=$usuario->getCodigo();

$controladorCliente=new ControladorCliente();
$cliente=$controladorCliente->devolverCliente($codigo);

$conPrestamoFisico=new ControladorPrestamoFisico();
$prestamos=$conPrestamoFisico->prestamosFisicosxCodCliente($cliente->getCod_cliente());

?>
<body>
	
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
                        	<h2 class="bradcaump-title">Mis reservas</h2>
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
                        <form action="#">               
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
											<th class="product-name">Nombre</th>
                                            <th class="product-price">Fecha de reserva</th>
											<th class="product-quantity">Fecha de devolución</th>
											<th class="product-quantity">Estado de prestamo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($prestamos as $kk)
                                        {
                                        ?>
                                        <tr>
                                            <td><?php $kk["titulo_documento"] ?></td>
											<td><?php $kk["fecha_prestamo_fisico"] ?></td>
											<td id="devolucion"><?php $kk["fecha_devolucion_fisico"] ?></td>
                                            <?php if($kk["nombre_estado"]=="Atrasado" ) 
                                            {
                                            echo('<td id"estadoPrestamo"><p style="color:#CC0000";><?php $kk["nombre_estado"] ?></p></td>');
                                            }else if($kk["nombre_estado"]=="Reservado" ) 
                                            {
                                            echo('<td id"estadoPrestamo"><p style="color:#FFFF00";><?php $kk["nombre_estado"] ?></p></td>');
                                            }else if($kk["nombre_estado"]=="Entregado" ) 
                                            {
                                            echo('<td id"estadoPrestamo"><p style="color:#33CC00";><?php $kk["nombre_estado"] ?></p></td>');
                                            }
                                            ?>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cantidad de prestamos realizados</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li></li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Prestamos disponibles</span>
                                <span>7</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
</body>
<?php
include("footer.php");
?>
<script>
        function cambiarEstado() {
            
            var tomarFecha=document.getElementById("devolucion").value.split("-");
            var fechaDevo=new Date( parseInt(tomarFecha[0]),parseInt(tomarFecha[1]),parseInt(tomarFecha[2]) );
            var fechaActual=new Date();
        }
</script>
</html>