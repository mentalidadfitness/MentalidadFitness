<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Gestionar Almuerzo</h1>
  </div>
  <div class="row">
            <form id="frmlun" class="" action="" method="post" data-parsley-validate>
                <div class="group  col-xs-12 col-sm-12 col-md-12 ">
                    <label for="nombreLun"></label>
                    <input type="text" class="input" name="data[]" id="nombreLun" required placeholder="Nombre">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 ">
                    <label for="descripcionLun"></label>
                    <textarea class="input" name="data[]" id="descripcionLun" required placeholder="Descripción"></textarea>
                </div>
                <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="lunaddbut" class="botton3">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/lunch_manage/read.lunch.php'; ?>
