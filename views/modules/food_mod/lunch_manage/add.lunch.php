<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR ALMUERZOS</h1>
        </div>
        <div class="">
            <form id="frmlun" class="" action="" method="post" data-parsley-validate>
                <div class="">
                    <label for="nombreLun">Nombre</label>
                    <input type="text" class="" name="data[]" id="nombreLun" required>
                </div>
                <div class="">
                    <label for="descripcionLun">Descripción</label>
                    <textarea class="" name="data[]" id="descripcionLun" required></textarea>
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button type="submit" id="lunaddbut" class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/lunch_manage/read.lunch.php'; ?>
</div>
</div>
