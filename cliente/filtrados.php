<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
include("header.php");

session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 4) {
    header("location: ../index.php");
}


$idioma=$_POST["idioma"];
$documento=$_POST["documento"];
$presentacion=$_POST["recurso"];


$controladorDocumentos=new ControladorDocumento();
$categorias=$controladorDocumentos->materias();
$idiomas=$controladorDocumentos->idiomas();


$mostrarDoc;
if($documento=="Libro")
{
	$mostrarDoc="Libros";

}else if($documento=="Ponencia"){
	$mostrarDoc="Ponencias";
}else if($documento=="Articulo")
{
	$mostrarDoc="Articulos";
}
$mostrarPre;

if($presentacion=="Digital")
{
	$mostrarPre="Digitales";

}else if($presentacion=="Física"){
	$mostrarPre="Fisicos";
}


$filtrados=$controladorDocumentos->filtradosInicio($idioma,$documento,$presentacion);
$resultados=0;
if(sizeof($filtrados)>0)
{
	$resultados=1;
}

?>


<body>
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
                        	<h2 class="bradcaump-title"> <?php echo ("Stand de ".$mostrarDoc." ".$mostrarPre) ?></h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Home</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active"><?php echo ($mostrarDoc." ".$mostrarPre) ?></span>
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
						<?php if($resultados==1){?>
							<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Categorias</h3>
        						<ul>
								<?php 
								foreach ($categorias as $key) { 
								if($key["nom_tipo_documento"]==$documento and $key["nom_tipo_presentacion"]==$presentacion)
								{
								?>
									<li><a href="#"><?php echo $key["nom_materia"]?> <span>(<?php echo $key["cantidad"]?>)</span></a></li>
								<?php }} ?>
								</ul>
        					</aside>
        					<?php } ?>

							<?php if($resultados==1){?>
							<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Idioma</h3>
        						<ul>
								<?php
								
								foreach ($idiomas as $key) { 
								if($key["nom_tipo_documento"]==$documento and $key["nom_tipo_presentacion"]==$presentacion)
								{
								?>

        						<li><a href="#"><?php echo $key["nom_idioma"]?></a></li>

								<?php }} ?>
								</ul>
        					</aside>
        					<?php } ?>
        				</div>
        			</div>
        			<?php 
					if($resultados==1){?>
					<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
							<?php if($resultados==1){ ?>
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									
			                        <p>Resultados (Libros Digitales)</p>
		                        </div>
							<?php } ?>	
        					</div>
        				</div>
						<div class="tab__container">						
							<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
									<?php 
									foreach ($filtrados as $key) {
									?>
									
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img"><img src="assetsCliente/images/books/1.jpg" alt="product image" width="150" height="300"></a>

											<div class="hot__box">
												<span class="hot-label">MAS PEDIDO</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a><?php echo($key["titulo_documento"])?>,<?php echo($key["nombre_autor"]." ".$key["apellido_autor"])?></a> </h4>
											<ul class="prize d-flex">
												<li>Publicado: <?php echo($key["fecha_publicacion"])?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
														<li><a data-toggle="modal" title="Especificaciones" class="quickview modal-view detail-link"  data-target= '#miModal'><i class="bi bi-search"></i></a></li>
													</ul>
												</div>
											</div>							
										</div>
											
									</div>
									<?php } ?>									
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
					<?php } ?>	
        		</div>
				<?php if($resultados!=1){echo ('<h1>Ups! No se encontraron resultados</h1>');}?>
        	</div>
			
        </div>

		</div>
</body>
<?php
include("footer.php");
?>