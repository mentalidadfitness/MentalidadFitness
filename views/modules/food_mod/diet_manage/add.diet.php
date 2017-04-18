<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR DIETA</h1>
        </div>
        <div class="bga-row">
            <form class="" action="?c=myDiet&a=create" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="dias"></label>
                    <input type="number" class="bga-input" name="data[]" id="dia" required data-parsley-type
                    placeholder="Días">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="estado"></label>
                    <input type="text" class="bga-input" name="data[]" id="est" required
                    placeholder="Estado">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <select name="data[]" class="bga-input">
                        <?php foreach ($this->DietM->readBreakfast() as $row) { ?>
                            <option value="<?php echo $row['code_breakfast']; ?>"><?php echo $row["nameBreakfast"]; ?></option>
                        <?php } ?>
                    </select>
                    <!--<label>Desayuno</label>-->
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <select name="data[]" class="bga-input">
                        <?php foreach ($this->DietM->readLunch() as $row) { ?>
                            <option value="<?php echo $row['code_lunch']; ?>"><?php echo $row["nameLunch"]; ?></option>
                        <?php } ?>
                    </select>
                  <!--  <label>Almuerzo</label>-->
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <select name="data[]" class="bga-input">
                        <?php foreach ($this->DietM->readDinner() as $row) { ?>
                            <option value="<?php echo $row['code_dinner']; ?>"><?php echo $row["nameDinner"]; ?></option>
                        <?php } ?>
                    </select>
                    <!--<label>Comida</label>-->
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <select name="data[]" class="bga-input">
                        <?php foreach ($this->DietM->readSnack() as $row) { ?>
                            <option value="<?php echo $row['code_snack']; ?>"><?php echo $row["nameSnack"]; ?></option>
                        <?php } ?>
                    </select>
                  <!--  <label>Snack</label>-->
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <select name="data[]" class="bga-input" placeholder="Usuario">
                        <?php foreach ($this->DietM->readUser() as $row) { ?>
                            <option value="<?php echo $row['code_user']; ?>"><?php echo $row["nameUser"]; ?></option>
                        <?php } ?>
                    </select>
                    <!--<label>Usuario</label>-->
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                      <button class="bga-botton1">GUARDAR</button>
                  </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/diet_manage/read.diet.php'; ?>
</div>
