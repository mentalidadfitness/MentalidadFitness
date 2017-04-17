<?php require_once 'views/include/main.php';?>
<?php $food = $this->FoodM->readFoodByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR ALIMENTOS</h1>
    </div>
    <div class="">
        <form class="" action="?c=food&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $food['nameFood']; ?>">
        </div>
        <div class="">
            <label for="proteinas">Proteinas</label>
            <input type="text" class="" name="data[]" value="<?php echo $food['proteinsFood']; ?>">
        </div>
        <div class="">
            <label for="calorias">Calorias</label>
            <input type="text" class="" name="data[]" value="<?php echo $food['caloriesFood']; ?>">
        </div>
        <div class="">
            <label for="azucares">Azucares</label>
            <input type="text" class="" name="data[]" value="<?php echo $food['sugarsFood']; ?>">
        </div>
        <div class="">
            <label for="carbohidratos">Carbohidratos</label>
            <input type="text" class="" name="data[]" value="<?php echo $food['carbohydratesFood']; ?>">
        </div>
        <div class="">
            <label for="fibras">Fibras</label>
            <input type="text" class="" name="data[]" value="<?php echo $food['fibersFood']; ?>">
        </div>
        <div class="">
            <label for="vitaminas">Vitaminas</label>
            <input type="text" class="" name="data[]" value="<?php echo $food['vitaminsFood']; ?>">
        </div>
            <input type="hidden" readonly value="<?php echo $food['code_food']; ?>" name="data[]">
        <div class="">
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
