<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Gestionar Almuerzo</h1>
  </div>
  <div class="bga-row">
            <form id="frmlun" class="" action="" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
                    <label for="nombreLun"></label>
                    <input type="text" class="bga-input" name="data[]" id="nombreLun" required placeholder="Nombre">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
                    <label for="descripcionLun"></label>
                    <textarea class="bga-input" name="data[]" id="descripcionLun" required placeholder="Descripción"></textarea>
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="lunaddbut" class="bga-botton1">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/lunch_manage/read.lunch.php'; ?>
