<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR SNACKS</h1>
        </div>
        <div class="">
            <form id="frmsna" class="" action="" method="post" data-parsley-validate>
                <div class="">
                    <label for="nombreSna">Nombre</label>
                    <input type="text" class="" name="data[]" id="nombreSna" required>
                </div>
                <div class="">
                    <label for="descripcionSna">Descripción</label>
                    <textarea class="" name="data[]" id="descripcionSna" required></textarea>
                </div>
                <div class="">
                    <button type="submit" id="snaaddbut" class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/snack_manage/read.snack.php'; ?>
</div>
</div>
