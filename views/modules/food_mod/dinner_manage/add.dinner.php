<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR COMIDAS</h1>
        </div>
        <div class="">
            <form class="" action="?c=comida&a=create" method="post">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="name" required>
                </div>
                <div class="">
                    <label for="desc">Descripción</label>
                    <textarea class="" name="data[]" id="desc" required></textarea>
                </div>
                <div class="">
                    <a class="" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/dinner_manage/read.dinner.php'; ?>
</div>
