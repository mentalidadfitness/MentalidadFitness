<?php require_once 'views/include/main.php';?>
<?php $food = $this->FoodM->readFoodByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR ALIMENTOS</h1>
    </div>
    <div class="bga-row">
        <form class="" action="?c=food&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for"name"></label>
            <input  type="text" class="bga-input" name="data[]" value="<?php echo $food['nameFood']; ?>" placeholder="Nombre" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for="proteinas"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $food['proteinsFood']; ?>" placeholder="Proteínas" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for="calorias"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $food['caloriesFood']; ?>" placeholder="Calorías" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for="azucares"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $food['sugarsFood']; ?>" plonchange="Azúcares" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for="carbohidratos"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $food['carbohydratesFood']; ?>" placeholder="Carbohidratos" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for="fibras"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $food['fibersFood']; ?>" placeholder="Fibras" required>
        </div>
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <label for="vitaminas"></label>
            <input type="text" class="bga-input" name="data[]" value="<?php echo $food['vitaminsFood']; ?>" placeholder="Vitaminas" required>
        </div>
            <input type="hidden" readonly value="<?php echo $food['code_food']; ?>" name="data[]">
            <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                <button class="bga-botton1">ACTUALIZAR</button>
        </div>
        </form>
    </div>
</div>
