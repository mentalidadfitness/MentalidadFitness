<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR PAGINA</h1>
        </div>
        <div class="">
            <form id="frmpag" class="" action="" method="post" data-parsley-validate>
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="nombrePag" required>
                </div>
                <div class="">
                    <label for="iconos">Iconos</label>
                    <input type="text" class="" name="data[]" id="iconoPag" required></textarea>
                </div>
                <div class="">
                    <label for="menu">Menu</label>
                    <input type="text" class="" name="data[]" id="menuPag" required>
                </div>
                <div class="">
                    <label for="colores">Colores</label>
                    <input type="text" class="" name="data[]" id="coloresPag" required>
                </div>
                <div class="">
                    <label for="url">URL</label>
                    <input type="text" class="" name="data[]" id="urlPag" required>
                </div>
                <div class="">
                    <label for="foto">Foto</label>
                    <input type="text" class="" name="data[]" id="fotoPag" required>
                </div>
                <div class="">
                    <label for="des">Descripcion</label>
                    <input type="text" class="" name="data[]" id="descripcionPag" required>
                </div>
                <div class="">
                    <label for="botones">Botones</label>
                    <input type="text" class="" name="data[]" id="botonesPag" required>
                </div>
                <div class="">
                    <label for="propiedades">Propiedades</label>
                    <input type="text" class="" name="data[]" id="propiedadesPag" required>
                </div>
                <div class="">
                    <label for="secciones">Secciones</label>
                    <input type="text" class="" name="data[]" id="seccionesPag" required>
                </div>
                <div class="">
                    <label for="imagenes">Imagenes</label>
                    <input type="text" class="" name="data[]" id="imagenesPag" required>
                </div>
                <div class="">
                    <label for="estatus">Estado</label>
                    <input type="text" class="" name="data[]" id="estadoPag" required>
                </div>
                <div class="">
                    <button type="submit" id="pagaddbut" class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/page_manage/read.page.php'; ?>
</div>
</div>
