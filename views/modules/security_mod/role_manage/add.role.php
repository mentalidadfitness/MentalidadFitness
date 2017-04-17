<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR ROL</h1>
        </div>
        <div class="bga-row">
            <form id="frmrole" class="" action="" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nombreRol"></label>
                    <input id="nombreRol" type="text" class="bga-input" name="data[]" required="required" placeholder="Nombre">
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="estadoRol">Estado</label>
                    <input id="estadoRol" type="text" class="bga-input"  name="data[]" required="required" placeholder="Estado">
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="roleaddbut" class="bga-botton1">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/role_manage/read.role.php'; ?>

</div>
