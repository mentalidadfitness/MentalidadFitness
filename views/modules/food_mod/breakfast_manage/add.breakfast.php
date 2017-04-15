<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR DESAYUNOS</h1>
        </div>
        <div class="">
            <form class="" id="frmBreakfast" method="post" data-parsley-validate>
                <div class="">
                    <label for="nameBre">Nombre</label>
                    <input type="text" class="" name="data[]" id="nameBre" required>
                </div>
                <div class="">
                    <label for="descBre">Descripción</label>
                    <textarea class="" name="data[]" id="descBre" required></textarea>
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button type="submit" class="" id="btnBreakfast">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/breakfast_manage/read.breakfast.php'; ?>
</div>
</div>
