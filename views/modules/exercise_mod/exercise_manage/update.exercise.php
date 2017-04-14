<?php  require_once 'views/include/main.php';?>
<?php $exercise = $this->ExerciseM->readExerciseByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR EJERCICIO</h1>
    </div>
    <div class="">
        <form class="" action="?c=exercise&a=updateData" method="post">
        <div class="">
            <label for"name">Nombre</label>
            <input  type="text" class="" name="data[]" value="<?php echo $exercise['nameExercise']; ?>">
        </div>
            <div class="">
                <label for="date">Fecha</label>
                <input type="text" class="" name="data[]" value="<?php echo $exercise['dateExercise']; ?>">
            </div>
            <div class="">
                <label for="status">estado</label>
                <input type="text" class="" name="data[]" value="<?php echo $exercise['statusExercise']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $exercise['code_exercise']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=exercise">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
