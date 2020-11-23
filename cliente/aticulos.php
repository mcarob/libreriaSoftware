<!doctype html>
<html class="no-js" lang="zxx">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorCliente.php');
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

$conCli=new ControladorCliente();
$cliente=$conCli->devolverCliente($usuario->getCod_usuario());



$contDoc=new ControladorDocumento();
$idiomas=$contDoc->idiomas();
$presentacion=$contDoc->tipoPres();
$documento=$contDoc->tipoDoc();

$listaDocumentos=$contDoc->informacionDocumentos();
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
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Stand libros fisicos</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Libros Fisicos</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Idiomas</h3>
								<form>
								<ul>
                                <?php foreach($idiomas as $i){?>    
                                <li><a><?php echo $i["nom_idioma"] ?></a></li>
        						<?php }?>	
								</ul>
								</form>
        					</aside>
        					
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Autores</h3>
        						<ul>
                                    <?php foreach($listaDocumentos as $a){?>
        							<li><a><?php echo ($a["nombre_autor"]." ".$a["apellido_autor"])?></a></li>
        							<?php }?>
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            
			                        </div>
			                        <p>Resultados Libros Fisicos</p>
			                        <div class="orderby__wrapper">
			                        	
			                        </div>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
                                    <?php foreach($listaDocumentos as $lib){
                                    if($lib["nom_tipo_documento"]=="Libro" and $lib["nom_tipo_presentacion"]=="Física"){?>

                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img"><img src="<?php echo$lib["direccion_portada"]?>" ></a>
											<div class="hot__box">
												<span class="hot-label">Libro</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a><?php echo $lib["nombre_autor"]." ".$lib["apellido_autor"]?></a></h4>
											<ul class="prize d-flex">
												<li><?php echo $lib["editorial_publicacion"]?></li>
												
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
                                                        <li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
														
														<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"  onclick='vermas(<?php echo $lib["cod_documento"] ?>,<?php echo ($cliente->getCod_cliente()) ?>)'>
														<i class="bi bi-search"></i></a>
														</li>
													</ul>
												</div>
											</div>
											
										</div>
                                    </div>

                                    <?php }
                                    }?>

									<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
												
															
												</div>
											</div>
										</div>
		        					<!-- End Single Product -->
	        					</div>
	        					<ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        						<li><a href="#">2</a></li>
	        						<li><a href="#">3</a></li>
	        						<li><a href="#">4</a></li>
	        						<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
	        					</ul>
	        				</div>
	        				
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      
		</div>
	
		
    </body>
<?php
include('footer.php')
?>
</html>

<script>
	function vermas(libro,cliente) {
		$('.modal-content').load('modalArticulo.php?libro='+libro+'&cliente='+cliente) 
		$('#modal1').modal('show');
	}
	

</script>