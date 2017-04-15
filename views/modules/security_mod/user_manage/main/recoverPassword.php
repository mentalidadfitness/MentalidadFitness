<?php $user = $this->UserM->readUserByToken($field) ?>
<h1>Recuperar contraseña</h1>
<div class="">
    <form class="" action="index.php?c=user&a=updatePassword" method="post">
        <div class="">
            <label for="">Vieja contraseña</label>
        </div>
        <div class="">
            <input type="password" name="" value="">
        </div>
        <div class="">
            <label for="">Nueva contraseña</label>
        </div>
        <div class="">
            <input type="password" name="data[]" value="">
        </div>
        <div class="">
            <label for="">Confirmar Nueva contraseña</label>
        </div>
        <div class="">
            <input type="password" name="" value="">
        </div>
        <div class="">
            <input type="hidden" readonly value="<?php echo $user['token'];?>" name="data[]">
        </div>
        <div class="">
            <button name="button">Modificar Contraseña</button>
        </div>
    </form>
</div>
