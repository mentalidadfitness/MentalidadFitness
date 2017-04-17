<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR PÁGINA</h1>
        </div>
        <div class="bga-row">
            <form id="frmpag" class="" action="" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="name"></label>
                    <input type="text" class="bga-input" name="data[]" id="nombrePag" required placeholder="Nombre">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="iconos"></label>
                    <input type="text" class="bga-input" name="data[]" id="iconoPag" required placeholder="Iconos"></textarea>
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="menu"></label>
                    <input type="text" class="bga-input" name="data[]" id="menuPag" required placeholder="Menu">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="colores"></label>
                    <input type="text" class="bga-input" name="data[]" id="coloresPag" required placeholder="Colores">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="url"></label>
                    <input type="text" class="bga-input" name="data[]" id="urlPag" required placeholder="URL">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="foto"></label>
                    <input type="text" class="bga-input" name="data[]" id="fotoPag" required placeholder="Foto">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="des"></label>
                    <input type="text" class="bga-input" name="data[]" id="descripcionPag" required placeholder="Descripción">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="botones"></label>
                    <input type="text" class="bga-input" name="data[]" id="botonesPag" required placeholder="Botones">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="propiedades"></label>
                    <input type="text" class="bga-input" name="data[]" id="propiedadesPag" required placeholder="Propiedades">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="secciones"></label>
                    <input type="text" class="bga-input" name="data[]" id="seccionesPag" required placeholder="Secciones">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="imagenes"></label>
                    <input type="text" class="bga-input" name="data[]" id="imagenesPag" required placeholder="Imagenes">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <label for="estatus"></label>
                    <input type="text" class="bga-input" name="data[]" id="estadoPag" required placeholder="Estado">
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="pagaddbut" class="bga-botton1">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/page_manage/read.page.php'; ?>
</div>
