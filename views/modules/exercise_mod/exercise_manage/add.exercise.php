<?php  require_once 'views/include/main.php';?>
<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR EJERCICIOS</h1>
        </div>
        <div class="">
            <form id="frmexe" class="" action="" method="post" data-parsley-validate>
                <div class="">
                    <label for="nombreExe">Nombre</label>
                    <input type="text" class="" name="data[]" id="nombreExe" required>
                </div>
                <div class="">
                    <label for="fechaExe">Fecha</label>
                    <input type="text" class="" name="data[]" id="fechaExe" required>
                </div>
                <div class="">
                    <label for="estadoExe">Estado</label>
                    <input type="text" class="" name="data[]" id="estadoExe" required>
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button id="exeaddbut" type="submit" class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/exercise_mod/exercise_manage/read.exercise.php'; ?>
</div>
</div><!-- ESTE DIV CIERRA LA ETIQUETA DIV CLASS="MENU" QUE ESTA EN EL MAIN UBICADO EN LA CARPETA INCLUDE-->
