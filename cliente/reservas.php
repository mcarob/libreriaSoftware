<!doctype html>
<html class="no-js" lang="zxx">

<?php
include("header.php");
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
											<th class="product-name">Tipo</th>
                                            <th class="product-price">Fecha de reserva</th>
											<th class="product-quantity">Fecha de devolución</th>
											<th class="product-quantity">Estado de prestamo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td >El talisman</td>
											<td >Libro</td>
											<td >13/11/2020</td>
											<td >24/11/2020</td>
											<td >Activo</td>
                                        </tr>
                                        <tr>
											<td>Digital Twins</td>
											<td>Articulo</td>
											<td>1/11/2020</td>
											<td>12/11/2020</td>
											<td>En mora</td>
                                        </tr>
                                        <tr>
											<td>Ponencia del ambiente</td>
											<td>Ponencia</td>
											<td>10/11/2020</td>
											<td>30/11/2020</td>
											<td>Activo</td>
                                        </tr>
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
                                    <li>3</li>
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
		<?php
		include("footer.php");
		?>
</body>
</html>