<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR DESAYUNOS</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=desayuno&a=create" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" required>
                </div>
                <div class="form-group">
                    <label for="desc">Descripción</label>
                    <textarea class="form-control" name="data[]" id="desc" required></textarea>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/breakfast_manage/read.breakfast.php'; ?>
</div>
