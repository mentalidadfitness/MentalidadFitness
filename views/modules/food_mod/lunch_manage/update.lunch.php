<?php $almuerzo = $this->ALmodel->readAlmuerzoByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR ALMUERZO</h1>
    </div>
    <div class="">
        <form class="" action="?c=almuerzo&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $almuerzo['nombre']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $almuerzo['descripcion']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $almuerzo['cod_almuerzo']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=almuerzo">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
