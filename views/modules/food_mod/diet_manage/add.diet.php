<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR DIETA</h1>
        </div>
        <div class="">
            <form class="" action="?c=dieta&a=create" method="post">
                <div class="">
                    <label for="dias">Dias</label>
                    <input type="text" class="" name="data[]" id="dia" required>
                </div>
                <div class="">
                    <label for="estado">Estado</label>
                    <input type="text" class="" name="data[]" id="est" required>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readDesayuno() as $row) { ?>
                            <option value="<?php echo $row['cod_desayuno']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Desayuno</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readAlmuerzo() as $row) { ?>
                            <option value="<?php echo $row['cod_almuerzo']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Almuerzo</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readComida() as $row) { ?>
                            <option value="<?php echo $row['cod_comida']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Comida</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readSnack() as $row) { ?>
                            <option value="<?php echo $row['cod_snack']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Snack</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readUsuario() as $row) { ?>
                            <option value="<?php echo $row['cod_usu']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Usuario</label>
                </div>
                <div class="">
                    <a class="" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/diet_manage/read.diet.php'; ?>
</div>
