<?php $comida = $this->COmodel->readComidaByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR COMIDA</h1>
    </div>
    <div class="">
        <form class="" action="?c=comida&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $comida['nombre']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $comida['descripcion']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $comida['cod_comida']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=comida">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
