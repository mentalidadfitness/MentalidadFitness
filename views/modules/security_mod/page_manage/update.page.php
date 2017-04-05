<?php $page = $this->PageM->readPageByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR PAGINA</h1>
    </div>
    <div class="">
        <form class="" action="?c=page&a=updateData" method="post">
        <div class="">
            <label for="nombre">Nombre</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['namePage']; ?>">
        </div>
        <div class="">
            <label for="iconos">Iconos</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['iconsPage']; ?>">
        </div>
        <div class="">
            <label for="menu">Menu</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['menuPage']; ?>">
        </div>
        <div class="">
            <label for="colores">Colores</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['colorsPage']; ?>">
        </div>
        <div class="">
            <label for="url">URL</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['URLPage']; ?>">
        </div>
        <div class="">
            <label for="foto">Foto</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['photoPage']; ?>">
        </div>
        <div class="">
            <label for="des">Descripcion</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['descriptionPage']; ?>">
        </div>
        <div class="">
            <label for="botones">Botones</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['buttonsPage']; ?>">
        </div>
        <div class="">
            <label for="propiedades">Propiedades</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['propertiesPage']; ?>">
        </div>
        <div class="">
            <label for="seccion">Seccion</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['sectionsPage']; ?>">
        </div>
        <div class="">
            <label for="imagenes">Imagenes</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['imagesPage']; ?>">
        </div>
        <div class="">
            <label for="estado">Estado</label>
            <input type="text" class="" name="data[]" value="<?php echo $page['statusPage']; ?>">
        </div>
            <input type="hidden" readonly value="<?php echo $page['code_page']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=page">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
