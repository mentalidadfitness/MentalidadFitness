<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Gestionar Alimentos</h1>
  </div>
  <div class="bga-row">
            <form class="" action="?c=food&a=create" id="frmFood" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nameFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="nameFoo" required placeholder="Nombre">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="proFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="proFoo" required placeholder="Proteínas">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="calFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="calFoo" required placeholder="Calorías">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="azuFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="azuFoo" required placeholder="Azúcares">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="carFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="carFoo" required placeholder="Carbohidratos">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="fibFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="fibFoo" required placeholder="Fibras">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="vitFoo"></label>
                    <input type="text" class="bga-input" name="data[]" id="vitFoo" required placeholder="Vitaminas">
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="bga-botton1" id="btnFood">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/food_manage/read.food.php'; ?>
