<?php require_once 'views/include/main.php';?>
<?php $snack = $this->SnackM->readSnackByCode($field) ?>
<div class="container-fluid">
  <div class="text-center">
        <h1>MODIFICAR SNACK</h1>
    </div>
    <div class="bga-row">
        <form class="" action="?c=snack&a=updateData" method="post">
        <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
            <input  type="text" class="bga-input" name="data[]" value="<?php echo $snack['nameSnack']; ?>" placeholder="Nombre" required>
        </div>
            <div class="bga-group  col-xs-12 col-sm-12 col-md-12 " >
                <input type="text" class="bga-input" name="data[]" value="<?php echo $snack['descriptionSnack']; ?>" placeholder="Descripción" required>
            </div>
            <input type="hidden" readonly value="<?php echo $snack['code_snack']; ?>" name="data[]">
            <div class="bga-botton01 col-xs-12 col-sm-12 col-md-12">
                <button class="bga-botton1">ACTUALIZAR</button>
            </div>
        </form>
    </div>
</div>
