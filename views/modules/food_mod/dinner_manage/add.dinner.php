<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR COMIDAS</h1>
        </div>
        <div class="">
            <form class="" id="frmDinner" method="post" data-parsley-validate>
                <div class="">
                    <label for="nameDin">Nombre</label>
                    <input type="text" class="" name="data[]" id="nameDin" required>
                </div>
                <div class="">
                    <label for="descDin">Descripción</label>
                    <textarea class="" name="data[]" id="descDin" required></textarea>
                </div>
                <div class="">
                    <button type="submit" id="btnDinner" class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/dinner_manage/read.dinner.php'; ?>
</div>
</div>
