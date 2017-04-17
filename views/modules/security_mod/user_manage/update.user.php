<?php require_once 'views/include/main.php';?>
<?php $user = $this->UserM->readUserByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR USUARIO</h1>
    </div>
    <div class="row">
        <form class="" action="?c=user&a=updateData" method="post">
        <div class="group  col-xs-12 col-sm-12 col-md-12 " >
            <label for"nombre"></label>
            <input  type="text" class="input" name="data[]" value="<?php echo $user['nameUser']; ?>" placeholder="Nombre" required>
        </div>
            <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                <label for="email"></label>
                <input type="text" class="input" name="data[]" value="<?php echo $user['emailAcc']; ?>" placeholder="E-mail" required>
            </div>
            <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                <label for="contraseña"></label>
                <input type="text" class="input" name="data[]" value="<?php echo $user['passwordAcc']; ?>" placeholder="Contraseña" required="">
            </div>
            <input type="hidden" readonly value="<?php echo $user['code_user']; ?>" name="data[]">
        <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
            <button class="botton3">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
