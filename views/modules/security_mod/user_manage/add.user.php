<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR USUARIO</h1>
        </div>
        <div class="">
            <form class="" action="?c=user&a=create" method="post">
                <div class="">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="" name="data[]" id="nom" required>
                </div>
                <div class="">
                    <label for="email">Email</label>
                    <input type="text" class="" name="data[]" id="ema" required>
                </div>
                <div class="">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="" name="data[]" id="con" required>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->UserM->readRole() as $row) { ?>
                            <option value="<?php echo $row['code_role']; ?>"><?php echo $row["nameRole"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Cod_rol</label>
                </div>
                <div class="">
                    <select name="data[]">
                        <?php foreach ($this->UserM->readCity() as $row) { ?>
                            <option value="<?php echo $row['code_city']; ?>"><?php echo $row["nameCity"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Ciudad</label>
                </div>
                <div class="">
                    <label for="password">Repetir Contraseña</label>
                    <input type="password" class="" name="data[]" id="con" required>
                </div>
                <div class="">
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/user_manage/read.user.php'; ?>
</div>
</div>
