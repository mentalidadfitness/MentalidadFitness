<?php require_once 'views/include/main.php';?>
<?php $breakfast = $this->BreakfastM->readBreakfastByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR DESAYUNO</h1>
    </div>
    <div class="">
        <form class="" action="?c=breakfast&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $breakfast['nameBreakfast']; ?>">
        </div>
            <div class="">
                <label for="desc">Descripcion</label>
                <input type="text" class="" name="data[]" value="<?php echo $breakfast['descriptionBreakfast']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $breakfast['code_breakfast']; ?>" name="data[]">
        <div class="">
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
