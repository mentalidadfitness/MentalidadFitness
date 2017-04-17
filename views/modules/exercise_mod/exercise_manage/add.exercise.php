<?php  require_once 'views/include/main.php';?>
  <div class="container-fluid">
    <div class="text-center">
      <h1>Gestionar ejercicio</h1>
    </div>
        <div class="bga-row">
            <form id="frmexe" class="" action="" method="post" data-parsley-validate>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                    <input type="text" class="bga-input" maxlength="37" name="data[]" id="nombreExe" placeholder="Nombre" required>
                </div>
                <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                    <input type="date" class="bga-input" name="data[]" id="fechaExe" placeholder="Fecha" required>
                </div>
                <div class="bga-group col-xs-12 col-sm-12 col-md-12">
                    <input type="text" class="bga-input" name="data[]" maxlength="8" id="estadoExe" placeholder="Estado" required>
                </div>
                <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                    <button id="exeaddbut" type="submit" class="bga-botton1">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/exercise_mod/exercise_manage/read.exercise.php'; ?>
</div><!-- ESTE DIV CIERRA LA ETIQUETA DIV CLASS="MENU" QUE ESTA EN EL MAIN UBICADO EN LA CARPETA INCLUDE-->
