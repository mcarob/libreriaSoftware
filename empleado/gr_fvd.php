<?php
include('Header.php');
include('menuEm.php');

?>
<script src="../administrador/librerias/jquery-3.3.1.min.js"></script>
<script src="../administrador/librerias/plotly-latest1.min.js"></script>

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="row"">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Prestamos Hechos Fisicamente VS Virtualmente</h2>
                    <div id="4">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="../TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="../TemplateAdministrador/vendors/scripts/process.js"></script>
<script src="../TemplateAdministrador/vendors/scripts/layout-settings.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#4').load('Cg_fvd.php');
    });
</script>