<?php require_once 'views/include/main.php';?>
<?php $dinner = $this->DinnerM->readDinnerByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR COMIDA</h1>
    </div>
    <div class="">
        <form class="" action="?c=dinner&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $dinner['nameDinner']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $dinner['descriptionDinner']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $dinner['code_dinner']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=dinner">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
