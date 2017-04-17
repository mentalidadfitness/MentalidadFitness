<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Gestionar cena</h1>
  </div>
        <div class="bga-row">
            <form class="" id="frmDinner" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
                    <label for="nameDin"></label>
                    <input type="text" class="bga-input" name="data[]" id="nameDin" required
                    placeholder="Nombre">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
                    <label for="descDin"></label>
                    <textarea class="bga-input" name="data[]" id="descDin" required
                    placeholder="Descripción"></textarea>
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="btnDinner" class="bga-botton1">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/dinner_manage/read.dinner.php'; ?>
