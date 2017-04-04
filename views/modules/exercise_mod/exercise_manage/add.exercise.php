<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR EJERCICIOS</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=ejercicio&a=create" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" required>
                </div>
                <div class="form-group">
                    <label for="ejercicio">Ejercicio</label>
                    <input class="form-control" name="data[]" id="ejer" required>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/exercise_mod/exercice_manage/read.exercise.php'; ?>
</div>
