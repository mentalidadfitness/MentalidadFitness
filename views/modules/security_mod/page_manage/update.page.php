<?php $pagina = $this->Pmodel->readPaginaByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR PAGINA</h1>
    </div>
    <div class="">
        <form class="" action="?c=pagina&a=updateData" method="post">
        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['nombre']; ?>">
        </div>
        <div class="">
            <label for="iconos">Iconos</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['iconos']; ?>">
        </div>
        <div class="">
            <label for="menu">Menu</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['menu']; ?>">
        </div>
        <div class="">
            <label for="colores">Colores</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['colores']; ?>">
        </div>
        <div class="">
            <label for="url">URL</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['URL']; ?>">
        </div>
        <div class="">
            <label for="foto">Foto</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['foto']; ?>">
        </div>
        <div class="">
            <label for="des">Descripcion</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['descripcion']; ?>">
        </div>
        <div class="">
            <label for="botones">Botones</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['botones']; ?>">
        </div>
        <div class="">
            <label for="propiedades">Propiedades</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['propiedades']; ?>">
        </div>
        <div class="">
            <label for="seccion">Seccion</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['secciones']; ?>">
        </div>
        <div class="">
            <label for="imagenes">Imagenes</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['imagenes']; ?>">
        </div>
        <div class="">
            <label for="estado">Estado</label>
            <input type="text" class="" name="data[]" value="<?php echo $pagina['estado']; ?>">
        </div>
            <input type="hidden" readonly value="<?php echo $pagina['cod_pagina']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=pagina">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
