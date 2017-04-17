<?php require_once 'views/include/main.php';?>
<?php $dinner = $this->DinnerM->readDinnerByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR COMIDA</h1>
    </div>
    <div class="row">
        <form class="" action="?c=dinner&a=updateData" method="post">
        <div class="group  col-xs-12 col-sm-12 col-md-12 ">
            <label for"name"></label>
            <input  type="text" class="input" name="data[]" value="<?php echo $dinner['nameDinner']; ?>"
            placeholder="Nombre" required>
        </div>
            <div class="group  col-xs-12 col-sm-12 col-md-12 ">
                <label for="desc"></label>
                <input type="text" class="input" name="data[]" value="<?php echo $dinner['descriptionDinner']; ?>"
                placeholder="Descripción" required>
            </div>
            <input type="hidden" readonly value="<?php echo $dinner['code_dinner']; ?>" name="data[]">
            <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
                <button class="botton3">ACTUALIZAR</button>
            </div>
        </div>
        </form>
    </div>
</div>
