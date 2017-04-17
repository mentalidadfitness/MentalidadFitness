<?php require_once 'views/include/main.php';?>
<?php $lunch = $this->LunchM->readLunchByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR ALMUERZO</h1>
    </div>
    <div class="bga-row">
        <form class="" action="?c=lunch&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
            <input  type="text" class="bga-input" name="data[]" value="<?php echo $lunch['nameLunch']; ?>" placeholder="Nombre" required>
        </div>
            <div class="bga-group  col-xs-12 col-sm-12 col-md-12 ">
                <input type="text" class="bga-input" name="data[]" value="<?php echo $lunch['descriptionLunch']; ?>" placeholder="Descripción" required>
            </div>
            <input type="hidden" readonly value="<?php echo $lunch['code_lunch']; ?>" name="data[]">
            <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                <button class="bga-botton1">ACTUALIZAR</button>
            </div>
        </div>
        </form>
    </div>
</div>
