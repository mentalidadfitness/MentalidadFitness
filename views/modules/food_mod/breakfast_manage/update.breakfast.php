<?php require_once 'views/include/main.php';?>
<?php $breakfast = $this->BreakfastM->readBreakfastByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
    <h1>Modificar desayuno</h1>
  </div>
  <div class="row">
        <form class="" action="?c=breakfast&a=updateData" method="post">
        <div class="group  col-xs-12 col-sm-12 col-md-12 " >
            <label for"name"></label>
            <input  type="text" class="input" name="data[]" value="<?php echo $breakfast['nameBreakfast']; ?>"
            placeholder="Nombre" required>
        </div>
            <div class="">
                <label for="desc"></label>
                <input type="text" class="input" name="data[]" value="<?php echo $breakfast['descriptionBreakfast']; ?>"
                placeholder="Descripción" required>
            </div>
            <input type="hidden" readonly value="<?php echo $breakfast['code_breakfast']; ?>" name="data[]">
            <div class="group botton1 col-xs-12 col-sm-12 col-md-12">
              <button class="botton3">Guardar</button>
            </div>
        </div>
        </form>
    </div>
</div>
