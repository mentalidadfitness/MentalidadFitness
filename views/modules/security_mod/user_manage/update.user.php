<?php $usuario = $this->USmodel->readUsuarioByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR USUARIO</h1>
    </div>
    <div class="">
        <form class="" action="?c=usuario&a=updateData" method="post">
        <div class="">
            <label for"nombre">nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $usuario['nombre']; ?>">
        </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="" name="data[]" value="<?php echo $usuario['email']; ?>">
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="text" class="" name="data[]" value="<?php echo $usuario['password']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $usuario['cod_usu']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=usuario">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
