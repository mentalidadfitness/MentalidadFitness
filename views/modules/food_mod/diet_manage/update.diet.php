  <?php require_once 'views/include/main.php';?>
<?php $diet = $this->DietM->readDietByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Modificar dieta</h1>
  </div>
    <div class="row">
        <form class="" action="?c=diet&a=updateData" method="post">
        <div class="group  col-xs-12 col-sm-12 col-md-12 " >
            <label for"dias"></label>
            <input  type="text" class="input" name="data[]" value="<?php echo $diet['daysDiet']; ?>"
            placeholder="Dias" required>
        </div>
            <div class="group  col-xs-12 col-sm-12 col-md-12 " >
                <label for="estado"></label>
                <input type="text" class="" name="data[]" value="<?php echo $diet['statusDiet']; ?>"
                placeholder="Estado" required>
            </div>
            <input type="hidden" readonly value="<?php echo $diet['code_myDiet']; ?>" name="data[]">
            <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                  <button  class="botton3" >ACTUALIZAR</button>
              </div>
        </form>
    </div>
</div>
