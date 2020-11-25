<?php
include('Header.php');
include('menuAdmi.php');

?>
<script src="librerias/jquery-3.3.1.min.js"></script>
<script src="librerias/plotly-latest1.min.js"></script>

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="row"">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Tipo de documentos más prestados</h2>
                    <div id="5367">
                        
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
        $('#5367').load('Cg_tipoDoc.php');
    });
</script>