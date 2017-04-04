<?php $rol = $this->Rmodel->readRolByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR ROL</h1>
    </div>
    <div class="">
        <form class="" action="?c=rol&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $rol['rolNom']; ?>">
        </div>
            <div class="">
                <label for="rol">Ejercicio</label>
                <input type="text" class="" name="data[]" value="<?php echo $rol['estado']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $rol['cod_rol']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=rol">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
