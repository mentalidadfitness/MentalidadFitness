<div class="buscador">
  <div class="contenedor">
    <div class="icon">
      <img src="views/assets/images/images_principal/buscar.png" alt="" class="buscar">
    </div>
    <div class="in">
      <input type="search" name="" value="" class="input001" placeholder="Buscar">
    </div>
  </div>
</div>

<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->SnackM->readSnack() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameSnack"]; ?></td>
                        <td><?php echo $row["descriptionSnack"]; ?></td>
                        <td>
                            <a href="?c=snack&a=update&scode=<?php echo $row['code_snack'];?>">
                                <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
                            </a>
                            -
                            <a href="?c=snack&a=delete&scode=<?php echo $row['code_snack'];?>">
                                <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red;" onclick="return confirm('¿Estas seguro?');"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
