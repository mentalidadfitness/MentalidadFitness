<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR SNACKS</h1>
        </div>
        <div class="row">
            <form id="frmsna" class="" action="" method="post" data-parsley-validate>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nombreSna"></label>
                    <input type="text" class="input" name="data[]" id="nombreSna" required placeholder="Nombre">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="descripcionSna"></label>
                    <textarea class="input" name="data[]" id="descripcionSna" required placeholder="Descripción"></textarea>
                </div>
                <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="snaaddbut" class="botton3">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/snack_manage/read.snack.php'; ?>
