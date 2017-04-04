<?php $ejercicio = $this->EJmodel->readEjercicioByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR EJERCICIO</h1>
    </div>
    <div class="">
        <form class="" action="?c=ejercicio&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $ejercicio['nomEjercicio']; ?>">
        </div>
            <div class="">
                <label for="ejercicio">Ejercicio</label>
                <input type="text" class="" name="data[]" value="<?php echo $ejercicio['ejercicio']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $ejercicio['cod_ejer']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=ejercicio">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
