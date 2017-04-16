<?php require_once 'views/include/main.php';?>
<?php $role = $this->RoleM->readRoleByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR ROL</h1>
    </div>
    <div class="">
        <form class="" action="?c=role&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $role['nameRole']; ?>">
        </div>
            <div class="">
                <label for="rol">Ejercicio</label>
                <input type="text" class="" name="data[]" value="<?php echo $role['statusRole']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $role['code_role']; ?>" name="data[]">
        <div class="">
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
