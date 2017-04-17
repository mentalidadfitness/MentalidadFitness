<?php require_once 'views/include/main.php';?>
<?php $page = $this->PageM->readPageByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR PAGINA</h1>
    </div>
    <div class="bga-row">
        <form class="" action="?c=page&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="nombre"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['namePage']; ?>" placeholder="Nombre" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="iconos"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['iconsPage']; ?>" placeholder="Iconos" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="menu"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['menuPage']; ?>" placeholder="Menu" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="colores"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['colorsPage']; ?>"placeholder="Colores" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="url"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['URLPage']; ?>" placeholder="URL" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="foto"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['photoPage']; ?>" placeholder="Foto" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="des"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['descriptionPage']; ?>" placeholder="Descripción" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="botones"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['buttonsPage']; ?>" placeholder="Botones" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="propiedades"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['propertiesPage']; ?>" placeholder="Propiedades" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="seccion"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['sectionsPage']; ?>" placeholder="Sección" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="imagenes"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['imagesPage']; ?>" placeholder="Imagenes" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
            <label for="estado"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $page['statusPage']; ?>" placeholder="Estado" required>
        </div>
            <input type="hidden" readonly value="<?php echo $page['code_page']; ?>" name="data[]">
        <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
            <button class="bga-botton1">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
