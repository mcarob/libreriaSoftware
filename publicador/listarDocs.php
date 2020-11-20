<!doctype html>
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorPublicador.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/modelo/daos/DaoPublicador.php');
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

$misPrestamos=$conCli->listarPrestamosXcliente($cliente->getCod_cliente());
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
											<th class="product-name">Titulo libro</th>
                                            <th class="product-price">Cantidad De Paginas</th>
                                            <th class="product-quantity">Tipo presentacion</th>
                                            <th class="product-quantity">Editorial</th>
                                            <th class="product-quantity">Codigo ISBN</th>
                                            <th class="product-quantity">Codigo SSN</th>
                                            <th class="product-quantity"></th>


											<th class="product-quantity">Estado de prestamo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($misPrestamos as $pre)
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $pre["titulo_documento"] ?></td>
											<td><?php echo $pre["fecha_prestamo_fisico"] ?></td>
                                            <td><?php echo $pre["fecha_devolucion_fisico"] ?></td>
                                            <td><?php echo $pre["codigo_isbn"] ?></td>
                                            <?php if($pre["nombre_estado"]=="Entregado")
                                                {
                                                    echo ('<td><font COLOR="green">'.$pre["nombre_estado"].'</font> </td>');
                                                }else if($pre["nombre_estado"]=="Reservado")
                                                {
                                                    echo ('<td><font COLOR="teal">'.$pre["nombre_estado"].'</font> </td>');
                                                }else if($pre["nombre_estado"]=="Atrasado")
                                                {
                                                    echo ('<td><font COLOR="red">'.$pre["nombre_estado"].'</font> </td>');    
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
                                    <li><?php echo $PreH["cantidad_prestamos"]?></li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Prestamos disponibles</span>
                                <span><?php echo $PreF ?></span>
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