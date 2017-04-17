<?php require_once 'views/include/main.php';?>
<?php $role = $this->RoleM->readRoleByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR ROL</h1>
    </div>
    <div class="bga-row">
        <form class="" action="?c=role&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
            <label for"name"></label>
            <input  type="text" class="bga-input" name="data[]" value="<?php echo $role['nameRole']; ?>" placeholder="Nombre">
        </div>
            <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                <label for="rol"></label>
                <input type="text" class="bga-input" name="data[]" value="<?php echo $role['statusRole']; ?>" placeholder="Estado">
            </div>
            <input type="hidden" readonly value="<?php echo $role['code_role']; ?>" name="data[]">
        <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
            <button class="bga-botton1">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
