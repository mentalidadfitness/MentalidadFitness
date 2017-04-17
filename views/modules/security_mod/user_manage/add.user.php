<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR USUARIO</h1>
        </div>
        <div class="row">
            <form class="" action="?c=user&a=create" method="post">
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nombre"></label>
                    <input type="text" class="input" name="data[]" id="nom" required placeholder="Nombre">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="email"></label>
                    <input type="email" class="input" name="data[]" id="ema" required placeholder="E-mail">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="contraseña"></label>
                    <input type="password" class="input" name="data[]" id="con" required placeholder="Contraseña">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="password"></label>
                    <input type="password" class="input" name="data[]" id="con" required placeholder="Repetir contraseña">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <select name="data[]">
                        <?php foreach ($this->UserM->readRole() as $row) { ?>
                            <option value="<?php echo $row['code_role']; ?>"><?php echo $row["nameRole"]; ?></option>
                        <?php } ?>
                    </select>
                    <label>Rol</label>
                </div>
                <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                    <button class="botton3">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/user_manage/read.user.php'; ?>
</div>
