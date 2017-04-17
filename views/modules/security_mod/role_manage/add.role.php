<?php require_once 'views/include/main.php';?>
<div class="container-fluid">
  <div class="text-center">
            <h1>GESTIONAR ROL</h1>
        </div>
        <div class="row">
            <form id="frmrole" class="" action="" method="post" data-parsley-validate>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="nombreRol"></label>
                    <input id="nombreRol" type="text" class="input" name="data[]" required="required" placeholder="Nombre">
                </div>
                <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                    <label for="estadoRol"></label>
                    <input id="estadoRol" type="text" class="input"  name="data[]" required="required" placeholder="Nombre">
                </div>
                <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" id="roleaddbut" class="botton3">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/role_manage/read.role.php'; ?>

</div>
