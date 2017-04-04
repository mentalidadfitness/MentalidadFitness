<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR USUARIO</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=usuario&a=create" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="data[]" id="ema" required>
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="form-control" name="data[]" id="con" required>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->USmodel->readRol() as $row) { ?>
                            <option value="<?php echo $row['cod_rol']; ?>"><?php echo $row["rolNom"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Cod_rol</label>
                </div>
                <div class="form-group">
                    <select name="data[]">
                        <?php foreach ($this->USmodel->readCiudad() as $row) { ?>
                            <option value="<?php echo $row['cod_ciudad']; ?>"><?php echo $row["nombre"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Ciudad</label>
                </div>
                <div class="form-group">
                    <label for="contraseña">Repetir Contraseña</label>
                    <input type="password" class="form-control" name="data[]" id="con" required>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/user_manage/read.user.php'; ?>
</div>
