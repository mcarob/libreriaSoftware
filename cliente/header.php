<head>
<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Cliente</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="assetsCliente/images/favicon.ico">
	<link rel="apple-touch-icon" href="assetsCliente/images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assetsCliente/css/bootstrap.min.css">
	<link rel="stylesheet" href="assetsCliente/css/plugins.css">
	<link rel="stylesheet" href="assetsCliente/style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="assetsCliente/css/custom.css">

	<!-- Modernizer js -->
	<script src="assetsCliente/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<img src="assetsCliente/images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index.php">Inicio</a></li>
								<li class="drop"><a href="#">Documentos</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Documentos Físicos</li>
											<li><a href="librosFisicos.php">Libros Físicos</a></li>
											<li><a href="ponenciasFisicas.php">Ponencias Fisicas</a></li>
											<li><a href="articulosFisicos.php">Articulos Físicos</a></li>
										</ul>
										<ul class="item item02">
											<li class="title">Documentos Digitales</li>
											<li><a href="librosDigitales.php">Libros Digitales</a></li>
											<li><a href="ponenciasDigitales.php">Ponencias Digitales</a></li>
											<li><a href="articulosDigitales.php">Articulos Digitales</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="shop-grid.html">Reservas</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li class="title">Mis reservas</li>
											<li><a href="reservas.php">Consultar</a></li>
											
										</ul>
									</div>
								</li>
					
								<li><a href="perfil.php">Perfil</a></li>
								<li><a href="index.php">Cerrar Sesión</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.php">Inicio</a></li>
								<li><a>Documentos</a>
									<ul>
										<li><a>Libros</a>
											<ul>
												<li><a href="librosFisicos.php">Fisicos</a></li>
												<li><a href="librosDigitales.php">Digitales</a></li>
											</ul>
										</li>
										<li><a>Articulos</a>
											<ul>
												<li><a href="articulosFisicos.php">Fisicos</a></li>
												<li><a href="articulosDigitales">Digitales</a></li>
											</ul>
										</li>
										<li><a>Ponencias</a>
											<ul>
												<li><a href="ponenciasFisicas.php">Fisicas</a></li>
												<li><a href="ponenciasDigitales">Digitales</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a>Mis Reservas</a>
									<ul>
										<li><a href="reservas.php">Consultar</a></li>
									</ul>
								</li>
								<li><a href="perfil.php">Perfil</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->	
			</div>		
		</header>