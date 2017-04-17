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
                    <th>Dias</th>
                    <th>Estado</th>
                    <th>cod_desayuno</th>
                    <th>cod_almuerzo</th>
                    <th>cod_comida</th>
                    <th>cod_snack</th>
                    <th>cod_usu</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->DietM->readDiet() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["daysDiet"]; ?></td>
                        <td><?php echo $row["statusDiet"]; ?></td>
                        <td><?php echo $row["code_breakfast"]; ?></td>
                        <td><?php echo $row["code_lunch"]; ?></td>
                        <td><?php echo $row["code_dinner"]; ?></td>
                        <td><?php echo $row["code_snack"]; ?></td>
                        <td><?php echo $row["code_user"]; ?></td>
                        <td>
                            <a href="?c=diet&a=update&dicode=<?php echo $row['code_myDiet'];?>">
                                <img src="views/assets/images/images_principal/Edit.png" alt="" class="edit001">
                            </a>
                            <a href="?c=diet&a=delete&dicode=<?php echo $row['code_myDiet'];?>">
                                <img src="views/assets/images/images_principal/delete.png" alt="" class="delete001">
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
