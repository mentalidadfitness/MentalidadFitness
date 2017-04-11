<?php $snack = $this->SnackM->readSnackByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR SNACK</h1>
    </div>
    <div class="">
        <form class="" action="?c=snack&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $snack['nameSnack']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $snack['descriptionSnack']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $snack['code_snack']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=snack">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
