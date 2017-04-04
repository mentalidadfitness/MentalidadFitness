<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR DIETA</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=dieta&a=create" method="post">
                <div class="form-group">
                    <label for="dias">Dias</label>
                    <input type="text" class="form-control" name="data[]" id="dia" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="data[]" id="est" required>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readDesayuno() as $row) { ?>
                            <option value="<?php echo $row['cod_desayuno']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Desayuno</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readAlmuerzo() as $row) { ?>
                            <option value="<?php echo $row['cod_almuerzo']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Almuerzo</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readComida() as $row) { ?>
                            <option value="<?php echo $row['cod_comida']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Comida</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readSnack() as $row) { ?>
                            <option value="<?php echo $row['cod_snack']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Snack</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->DImodel->readUsuario() as $row) { ?>
                            <option value="<?php echo $row['cod_usu']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Usuario</label>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
