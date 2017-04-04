<?php $dieta = $this->DImodel->readDietaByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR DIETA</h1>
    </div>
    <div class="">
        <form class="" action="?c=dieta&a=updateData" method="post">
        <div class="">
            <label for"dias">Dias</label>
            <input  type="text" class="" name="data[]" value="<?php echo $dieta['dias']; ?>">
        </div>
            <div class="">
                <label for="estado">Estado</label>
                <input type="text" class="" name="data[]" value="<?php echo $dieta['estado']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $dieta['cod_miDieta']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=dieta">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
