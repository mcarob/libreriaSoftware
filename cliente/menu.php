<header id="wn__header" class="header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                <div class="logo">
                    <a href="index.php">
                        <img src="assetsCliente/images/logo/logo2.png" alt="logo images">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="index.php">Inicio</a></li>
                        <li class="drop"><a>Documentos</a>
                            <div class="megamenu mega02">
                                <ul class="item item02">
                                    <li class="title">Documentos Físicos</li>
                                    <li><a href="libroFisico.php">Libros</a></li>
                                </ul>
                                <ul class="item item02">
                                    <li class="title">Documentos Digitales</li>
                                    <li><a href="libroDigital.php">Libros</a></li>
                                    <li><a href="articulos.php">Articulos</a></li>
                                    <li><a href="ponencias.php">Ponencias</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a>Mis reservas</a>
                            <div class="megamenu mega02">
                                <ul class="item item02">
                                    <li><a href="reservasF.php">Fisicas</a></li>
                                    <li><a href="reservasD.php">Digitales</a></li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li><a href="perfil.php">Perfil</a></li>
                        <li><a href="../cerrarSesion.php">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                
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
                                <li><a>Fisicos</a>
                                    <ul>
                                        <li><a href="libroFisico.php">Libros</a></li>
                                    </ul>
                                </li>
                                <li><a>Digitales</a>
                                    <ul>
                                        <li><a href="libroDigital.php">Libros</a></li>
                                        <li><a href="articulos.php">Articulos</a></li>
                                        <li><a href="ponencias.php">Ponencias</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
                        <li><a>Mis reservas</a>
                            <ul>
                                
                                <li><a href="reservasF.php">Fisicas</a></li>
    
                                <li><a href="reservasD.php">Digitales</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="perfil.php">Perfil</a></li>
                        <li><a href="../cerrarSesion.php">Cerrar sesión</a></li>
                        
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