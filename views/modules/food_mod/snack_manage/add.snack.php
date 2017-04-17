<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR SNACKS</h1>
        </div>
        <div class="bga-row">
            <form id="frmsna" class="" action="" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nombreSna"></label>
                    <input type="text" class="bga-input" name="data[]" id="nombreSna" required placeholder="Nombre">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="descripcionSna"></label>
                    <textarea class="bga-input" name="data[]" id="descripcionSna" required placeholder="Descripción"></textarea>
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="snaaddbut" class="bga-botton1">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/snack_manage/read.snack.php'; ?>
