
<?php
include("header.php");
include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');

$conDocumento=new ControladorDocumento();
$idiomas=$conDocumento->idiomas();

?>
<body>	
	<div class="wrapper" id="wrapper">
		
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Que tipo de documento prefieres">
					<input type="text" placeholder="Buscar por palabra clave en nuestros documentos">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		
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
  
	        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="slider__content">
		            			<div class="contentbox">
		            				<h2>Reserva <span>tu </span></h2>
		            				<h2>libro <span>favorito </span></h2>
		            				<h2>en tu <span>biblioteca Bosquecillo </span></h2>
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
                    <form method="POST" action="filtrados.php" id="filtros">
						<div class="row">
                        <div class="col-md-3 col-sm-4">
							<div class="form-group">
									<select name="idioma" id="idioma" class="form-control">
									<?php
										foreach ($idiomas as $i) {
										?>
										<option value="<?php echo $i["nom_idioma"];?>">
											<?php echo $i["nom_idioma"]; ?></option>
										<?php
										}
										?>
									</select>
							</div>
						</div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <select name="documento" id="documento" class="form-control">
                                    <option value="Libro">Libros</option>
                                    <option value="Ponencia">Ponencias</option>
                                    <option value="Articulo">Artículos Científicos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                <select name="recurso" id="recurso" class="form-control">
                                    <option value="Física">Recurso Físico</option>
                                    <option value="Digital">Recurso Digital</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="form-group">
                                
								<button class="form-control" type="submit">Filtrar</button>
                            </div>
						</div>
					</div>
                    </form>
                </div>
            </div>
        </section>
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<br>
				<br>
				<br><br><br><br><br><br>
			</div>
		</section>
	</div>

	
</body>
		
<?php
		include('footer.php')
?>
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