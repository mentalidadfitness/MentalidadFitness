<?php $desayuno = $this->DEmodel->readDesayunoByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR DESAYUNO</h1>
    </div>
    <div class="">
        <form class="" action="?c=desayuno&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $desayuno['nombre']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $desayuno['descripcion']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $desayuno['cod_desayuno']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=desayuno">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
