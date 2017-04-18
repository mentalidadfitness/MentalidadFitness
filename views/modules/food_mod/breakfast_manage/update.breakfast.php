<?php require_once 'views/include/main.php';?>
<?php $breakfast = $this->BreakfastM->readBreakfastByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
    <h1>MODIFICAR DESAYUNO</h1>
  </div>
  <div class="bga-row">
        <form class="" action="?c=breakfast&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
            <label for"name"></label>
            <input  type="text" class="bga-input" name="data[]" value="<?php echo $breakfast['nameBreakfast']; ?>"
            placeholder="Nombre" required>
        </div>
            <div class="bga-group col-xs-12 col-sm-12 col-md-12">
                <input type="text" class="bga-input" name="data[]" value="<?php echo $breakfast['descriptionBreakfast']; ?>"
                placeholder="Descripción" required>
            </div>
            <input type="hidden" readonly value="<?php echo $breakfast['code_breakfast']; ?>" name="data[]">
            <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
              <button class="bga-botton1">ACTUALIZAR</button>
            </div>
        </div>
        </form>
    </div>
</div>
