<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Gestionar desayuno</h1>
  </div>
      <div class="row">
            <form class="" id="frmBreakfast" method="post" data-parsley-validate>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nameBre"></label>
                    <input type="text" class="input" name="data[]" id="nameBre"
                    placeholder="Nombre" required>
                </div>
                <div class="">
                    <label for="descBre"></label>
                    <textarea class="input" name="data[]" id="descBre"
                    placeholder="Descripción" required></textarea>
                </div>
              <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="botton3" id="btnBreakfast">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/breakfast_manage/read.breakfast.php'; ?>
