<!doctype html>
<html class="no-js" lang="zxx">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/ControladorDocumento.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/libreriaSoftware/controlador/controladorRegistro.php');

session_start();
if (!isset($_SESSION['user'])) {

    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 3) {
    header("location: ../index.php");
}
include("header.php");

$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);

?>
<body>
	
	<div class="wrapper" id="wrapper">
		
		<?php
		include("menu.php");
		?>
        <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        
	        <div class="slide animation__style10 bg-image--1index fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>El <span>Bosquecillo</span> </h2>
		            				<h2>La mejor <span>Forma de </span></h2>
		            				<h2><span>Buscar tus </span>Documentos </h2>
				                   	<a class="shopbtn" href="#">Ver todos</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
            <!-- End Single Slide -->
        	<!-- Start Single Slide -->
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Buy <span>your </span></h2>
		            				<h2>favourite <span>Book </span></h2>
		            				<h2>from <span>Here </span></h2>
				                   	<a class="shopbtn" href="#">shop now</a>
		            			</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </div>
        </div>

		<section class="search-filters">
            <div class="container">
                <div class="filter-box">
                    <h3>¿Qué tipo de documento estas buscando?</h3>
                    <form action="filtrados.php" method="POST" id="filtros">
						<div class="row">
						<div class="col-md-3 col-sm-4">
                            <div class="form-group">
								<label>(*) Tipo de documento: </label>
								<select name="documento" id="documento" class="form-control">
								<?php foreach($documento as $i){?>
                                    <option value="<?php echo $i["nom_tipo_documento"]?>"><?php echo $i["nom_tipo_documento"]?></option>
								<?php }?>
                                </select>
                            </div>
						</div>
						<div class="col-md-3 col-sm-4">
                            <div class="form-group">
								<label>(*) Presentación: </label>
                                <select name="presentacion" id="presentacion" class="form-control">
                                <?php foreach($presentacion as $i){?>
                                    <option value="<?php echo $i["nom_tipo_presentacion"]?>"><?php echo $i["nom_tipo_presentacion"]?></option>
								<?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
								<label>(*) Idioma: </label>
								<select name="idioma" id="idioma" class="form-control">
								<?php foreach($idiomas as $i){?>
                                    <option value="<?php echo $i["nom_idioma"]?>"><?php echo $i["nom_idioma"]?></option>
								<?php }?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-4">
                            <div class="form-group">
								<label></label>
                                <input class="form-control" type="submit" value="Buscar">
                            </div>
						</div>
					</div>
                    </form>
                </div>
            </div>
        </section>
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<br><br>
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
						</div>
					</div>
				</div>
				<!-- CONTENEDOR DE PRODUCTOS-->

				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
					
					<!-- AQUI EMPIEZA EL PRODUCTO -->
					<?php foreach($listaDocumentos as $doc){
					if($doc["nom_tipo_documento"]=="Libro"){?>
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
							<a class="first__img" ><img src="<?php echo($doc["direccion_portada"])?>" width="270" height="340" ></a>
								<div class="hot__box">
									<span class="hot-label">LIBRO</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a><?php echo ($doc["nombre_autor"]." ".$doc["apellido_autor"] )?></a></h4>
								<ul class="prize d-flex">
									<li><?php echo ($doc["editorial_publicacion"])?></li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="wishlist" href=""><i class="bi bi-shopping-cart-full"></i></a></li>
											<li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }
					}?>
					<!--AQUI TERMINA EL PRODUCTO  -->
				</div>
				<!-- FIN DEL CONTENEDOR DE PRODUCTOS -->
			</div>
		</section>
		
	</div>
	
</body>
<?php
include('footer.php')
?>
</html>
<script>
        function filtrar() {

            datos = $('#filtros').serialize();

            $.ajax({
                type: "POST",
                data: datos,
                url: "filtrados.php",
                success: function(r) {

                window.location.href = "filtrados.php";

                }
            });

        }
    </script>
