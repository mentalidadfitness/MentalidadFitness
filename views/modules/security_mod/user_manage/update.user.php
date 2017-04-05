<?php $user = $this->UserM->readUserByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR USUARIO</h1>
    </div>
    <div class="">
        <form class="" action="?c=user&a=updateData" method="post">
        <div class="">
            <label for"nombre">nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $user['nameUser']; ?>">
        </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="" name="data[]" value="<?php echo $user['emailAcc']; ?>">
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="text" class="" name="data[]" value="<?php echo $user['passwordAcc']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $user['code_user']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=user">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
