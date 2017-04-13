<?php  require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR EJERCICIOS</h1>
        </div>
        <div class="">
            <form class="" action="?c=exercise&a=create" method="post">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="name" required>
                </div>
                <div class="">
                    <label for="ejercicio">Fecha</label>
                    <input type="text" class="" name="data[]" id="ejer" required>
                </div>
                <div class="">
                    <label for="ejercicio">Estado</label>
                    <input type="text" class="" name="data[]" id="ejer" required>
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/exercise_mod/exercise_manage/read.exercise.php'; ?>
</div>
</div><!-- ESTE DIV CIERRA LA ETIQUETA DIV CLASS="MENU" QUE ESTA EN EL MAIN UBICADO EN LA CARPETA INCLUDE-->
