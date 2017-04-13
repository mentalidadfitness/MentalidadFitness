  <?php require_once 'views/include/main.php';?>
<?php $diet = $this->DietM->readDietByCode($field) ?>
<div class="">
    <div class="">
        <h1>MODIFICAR DIETA</h1>
    </div>
    <div class="">
        <form class="" action="?c=diet&a=updateData" method="post">
        <div class="">
            <label for"dias">Dias</label>
            <input  type="text" class="" name="data[]" value="<?php echo $diet['daysDiet']; ?>">
        </div>
            <div class="">
                <label for="estado">Estado</label>
                <input type="text" class="" name="data[]" value="<?php echo $diet['statusDiet']; ?>">
            </div>
            <input type="hidden" readonly value="<?php echo $diet['code_myDiet']; ?>" name="data[]">
        <div class="">
            <a class="" href="?c=diet">Atras</a>
            <button class="">Actualizar
            </button>
        </div>
        </form>
    </div>
</div>
