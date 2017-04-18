<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Gestionar desayuno</h1>
  </div>
      <div class="bga-row">
            <form class="" id="frmBreakfast" method="post" data-parsley-validate>
                <div class="bga-group col-xs-12 col-sm-12 col-md-12 " >
                    <input type="text" class="bga-input" name="data[]" id="nameBre"
                    placeholder="Nombre" required>
                </div>
                <div class="bga-group col-xs-12 col-sm-12 col-md-12">
                    <textarea class="bga-input" name="data[]" id="descBre"
                    placeholder="Descripción" required></textarea>
                </div>
              <div class="bga-botton01 botton1 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="bga-botton1" id="btnBreakfast">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/breakfast_manage/read.breakfast.php'; ?>
