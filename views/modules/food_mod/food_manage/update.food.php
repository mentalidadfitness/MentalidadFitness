<?php $alimento = $this->ALImodel->readAlimentoByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR ALIMENTOS</h1>
    </div>
    <div class="">
        <form class="" action="?c=alimento&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $alimento['alimento']; ?>">
        </div>
        <div class="">
            <label for="proteinas">Proteinas</label>
            <input type="text" class="" name="data[]" value="<?php echo $alimento['proteinas']; ?>">
        </div>
        <div class="">
            <label for="calorias">Calorias</label>
            <input type="text" class="" name="data[]" value="<?php echo $alimento['calorias']; ?>">
        </div>
        <div class="">
            <label for="azucares">Azucares</label>
            <input type="text" class="" name="data[]" value="<?php echo $alimento['azucares']; ?>">
        </div>
        <div class="">
            <label for="carbohidratos">Carbohidratos</label>
            <input type="text" class="" name="data[]" value="<?php echo $alimento['carbohidratos']; ?>">
        </div>
        <div class="">
            <label for="fibras">Fibras</label>
            <input type="text" class="" name="data[]" value="<?php echo $alimento['fibras']; ?>">
        </div>
        <div class="">
            <label for="vitaminas">Vitaminas</label>
            <input type="text" class="" name="data[]" value="<?php echo $alimento['vitaminas']; ?>">
        </div>
            <input type="hidden" readonly value="<?php echo $alimento['cod_alimento']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=alimento">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
