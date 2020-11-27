
<html>
<body>
<form id="reserva" method="POST" action="javascript:agregarReserva()">
            <input type="hidden" id="cliente" name="cliente" value="aa" />
            <input type="hidden" id="idDocumento" name="idDocumento" value="../archivos/documentos/modelos.pdf" />
            <input type="hidden" id="existencias" name="existencias" value="aa" />
            <input type="hidden" id="presentacion" name="presentacion" value="aa" />
            <td><button id='botonReservar' type='submit' class='btn btn-primary mb-2 btn-pill'>Descargar</button></td>
</form>
</body>
</html>

<script>
    
        function agregarReserva() {
               
            datos = $('#reserva').serialize();

                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "prueba.php",
                    });

               
        }
</script>

