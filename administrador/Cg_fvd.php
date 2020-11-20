<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
$CDocumento = new ControladorDocumento();
$lista = $CDocumento->graficoFisicovDigital();




// $datosX = json_encode($valoresX);
// $datosx2 = json_encode($valoresY);
// ?>

<div id="graficaFVD">
</div>

<!-- <script type="text/javascript">
    function crearCadenaBarras(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x]);
        }
        return arr;
    }
</script> -->

<script type="text/javascript">

var data = [{
  values: [<?php echo $lista[0][0] ?>, <?php echo $lista[0][1] ?>],
  labels: ['Fisicos', 'Digitales'],
  type: 'pie'
}];

var layout = {
  height: 400,
  width: 500
};

Plotly.newPlot('graficaFVD', data, layout);
</script>