<!doctype html>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/daos/DocumentoDAO.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 4) {
    header("location: ../index.php");
}
include("header.php");

// $conReg=new ControladorRegistro();
// $usuario=$conReg->darUsuario($_SESSION['user']);
// $codigo=$usuario->getCod_usuario();
$conDoc = new ControladorDocumento();
$ponencia = $conDoc->listarPonencia($conDoc->listarLibro());

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
                            <h2 class="bradcaump-title">Mis Ponencias</h2>
                            <nav class="bradcaump-content">
                                <a class="breadcrumb_item" href="index.php">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb_item active">Mis Ponencias</span>
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
                            <div class="pd-20">
                                    <h4 class="text-blue h4">Ponencias registradas</h4>
                                    <br>
				                </div>
                                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-name">Titulo Ponencia</th>
                                            <th class="product-price">Fecha de Publicacion</th>
                                            <th class="product-quantity">Editorial</th>
                                            <th class="product-quantity">Codigo ISBN</th>
                                            <th class="product-price">Nombre del congreso</th>
                                            <th class="product-quantity">Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach ($ponencia as $key) {
                                            echo ("<tr>");
                                            echo ("<td>" . $key['titulo_documento'] . "</td>");
                                            echo ("<td>" . $key['fecha_publicacion'] . "</td>");
                                            echo ("<td>" . $key['editorial_publicacion'] . "</td>");
                                            echo ("<td>" . $key['codigo_isbn'] . "</td>");   
                                            echo ("<td>" . $key['informacion_congreso'] . "</td>");        
                                            echo ("<td>" . "<button type='button' class='btn btn-danger'>Deshabilitar</button>" . "</td>");
                                            
                                           
                                        ?>
                                        <?php
                                            echo ("</tr>");
                                        }
                                        ?>    
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
                                    <li>Cantidad de Ponencias publicados</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <!-- <li><?php echo $libH["cantidad_libstamos"] ?></li> -->
                                    <li>1</li>
                                </ul>
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
    $(document).ready(function() {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

</html>