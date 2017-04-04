<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR EJERCICIOS</h1>
        </div>
        <div class="">
            <form class="" action="?c=ejercicio&a=create" method="post">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="name" required>
                </div>
                <div class="">
                    <label for="ejercicio">Ejercicio</label>
                    <input type="text" class="" name="data[]" id="ejer" required>
                </div>
                <div class="">
                    <a class="" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/exercise_mod/exercice_manage/read.exercise.php'; ?>
</div>
