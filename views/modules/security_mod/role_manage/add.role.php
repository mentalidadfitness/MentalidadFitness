<?php require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR ROL</h1>
        </div>
        <div class="">
            <form id="frmrole" class="" action="" method="post" data-parsley-validate>
                <div class="">
                    <label for="namer">Nombre</label>
                    <input id="namer" type="text" class="validate" name="data[]" required="required">
                </div>
                <div class="">
                    <label for="estador">Estado</label>
                    <input id="estador" type="text" class="validate"  name="data[]" required="required">
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button type="submit" id="roleaddbut" class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/role_manage/read.role.php'; ?>
</div>
</div>
