<?php $lunch = $this->Lunch->readLunchByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR ALMUERZO</h1>
    </div>
    <div class="">
        <form class="" action="?c=lunch&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $lunch['nameLunch']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $lunch['descriptionLunch']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $lunch['code_lunch']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=lunch">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
