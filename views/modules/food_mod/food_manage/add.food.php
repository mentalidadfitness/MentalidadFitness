<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR ALIMENTOS</h1>
        </div>
        <div class="">
            <form class="" action="?c=food&a=create" id="frmFood" method="post" data-parsley-validate>
                <div class="">
                    <label for="nameFoo">Nombre</label>
                    <input type="text" class="" name="data[]" id="nameFoo" required>
                </div>
                <div class="">
                    <label for="proFoo">Proteinas</label>
                    <input type="text" class="" name="data[]" id="proFoo" required>
                </div>
                <div class="">
                    <label for="calFoo">Calorias</label>
                    <input type="text" class="" name="data[]" id="calFoo" required>
                </div>
                <div class="">
                    <label for="azuFoo">Azucares</label>
                    <input type="text" class="" name="data[]" id="azuFoo" required>
                </div>
                <div class="">
                    <label for="carFoo">Carbohidratos</label>
                    <input type="text" class="" name="data[]" id="carFoo" required>
                </div>
                <div class="">
                    <label for="fibFoo">Fibras</label>
                    <input type="text" class="" name="data[]" id="fibFoo" required>
                </div>
                <div class="">
                    <label for="vitFoo">Vitaminas</label>
                    <input type="text" class="" name="data[]" id="vitFoo" required>
                </div>
                <div class="">
                    <button type="submit" class="" id="btnFood">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/food_manage/read.food.php'; ?>
</div>
</div>
