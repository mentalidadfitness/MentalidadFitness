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
                    foreach ($this->BreakfastM->readBreakfast() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameBreakfast"]; ?></td>
                        <td><?php echo $row["descriptionBreakfast"]; ?></td>
                        <td>
                            <a href="?c=breakfast&a=update&decode=<?php echo $row['code_breakfast'];?>">
                                <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
                            </a>
                            -
                            <a href="?c=breakfast&a=delete&decode=<?php echo $row['code_breakfast'];?>">
                                <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red; " onclick="return confirm('¿Estas seguro?');"></i>
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
