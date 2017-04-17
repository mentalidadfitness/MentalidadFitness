<?php  require_once 'views/include/main.php';?>
<?php $exercise = $this->ExerciseM->readExerciseByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Modificar ejercicio</h1>
  </div>
    <div class="bga-row">
        <form class="" action="?c=exercise&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
            <input  type="text" class="bga-input" name="data[]" value="<?php echo $exercise['nameExercise']; ?>"
            placeholder="Nombre" required="">
        </div>
            <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                <input type="date" class="bga-input" name="data[]" value="<?php echo $exercise['dateExercise']; ?>"
                placeholder="Fecha">
            </div>
            <div class="bga-group  col-xs-12 col-sm-12 col-md-12">
                <input type="text" class="bga-input" name="data[]" value="<?php echo $exercise['statusExercise']; ?>"
                placeholder="Estado" required="">
            </div>
            <input type="hidden" readonly value="<?php echo $exercise['code_exercise']; ?>" name="data[]">
            <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                <button  class="bga-botton1">Actualizar</button>
            </div>
        </div>
        </form>
    </div>
</div>
