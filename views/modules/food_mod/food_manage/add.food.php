<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR ALIMENTOS</h1>
        </div>
        <div class="">
            <form class="" action="?c=food&a=create" method="post">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="name" required>
                </div>
                <div class="">
                    <label for="proteinas">Proteinas</label>
                    <input type="text" class="" name="data[]" id="pro" required></textarea>
                </div>
                <div class="">
                    <label for="calorias">Calorias</label>
                    <input type="text" class="" name="data[]" id="cal" required>
                </div>
                <div class="">
                    <label for="azucares">Azucares</label>
                    <input type="text" class="" name="data[]" id="azu" required>
                </div>
                <div class="">
                    <label for="carbohidratos">Carbohidratos</label>
                    <input type="text" class="" name="data[]" id="car" required>
                </div>
                <div class="">
                    <label for="fibras">Fibras</label>
                    <input type="text" class="" name="data[]" id="fib" required>
                </div>
                <div class="">
                    <label for="vitaminas">Vitaminas</label>
                    <input type="text" class="" name="data[]" id="vit" required>
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/food_mod/food_manage/read.food.php'; ?>
</div>
