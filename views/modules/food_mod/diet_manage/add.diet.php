<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR DIETA</h1>
        </div>
        <div class="">
            <form class="" action="?c=myDiet&a=create" method="post" data-parsley-validate>
                <div class="">
                    <label for="dias">Dias</label>
                    <input type="number" class="" name="data[]" id="dia" required data-parsley-type>
                </div>
                <div class="">
                    <label for="estado">Estado</label>
                    <input type="text" class="" name="data[]" id="est" required>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DietM->readBreakfast() as $row) { ?>
                            <option value="<?php echo $row['code_breakfast']; ?>"><?php echo $row["nameBreakfast"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Desayuno</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DietM->readLunch() as $row) { ?>
                            <option value="<?php echo $row['code_lunch']; ?>"><?php echo $row["nameLunch"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Almuerzo</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DietM->readDinner() as $row) { ?>
                            <option value="<?php echo $row['code_dinner']; ?>"><?php echo $row["nameDinner"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Comida</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DietM->readSnack() as $row) { ?>
                            <option value="<?php echo $row['code_snack']; ?>"><?php echo $row["nameSnack"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Snack</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DietM->readUser() as $row) { ?>
                            <option value="<?php echo $row['code_user']; ?>"><?php echo $row["nameUser"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Usuario</label>
                </div>
                <div class="">
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/diet_manage/read.diet.php'; ?>
</div>
</div>
