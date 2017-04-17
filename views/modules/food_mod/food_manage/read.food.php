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
                <th>Proteinas</th>
                <th>Calorias</th>
                <th>Azucares</th>
                <th>Carbohidratos</th>
                <th>Fibras</th>
                <th>Vitaminas</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $item = 0;
                foreach ($this->FoodM->readFood() as $row) {
                    $item++;
            ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td><?php echo $row["nameFood"]; ?></td>
                    <td><?php echo $row["proteinsFood"]; ?></td>
                    <td><?php echo $row["caloriesFood"]; ?></td>
                    <td><?php echo $row["sugarsFood"]; ?></td>
                    <td><?php echo $row["carbohydratesFood"]; ?></td>
                    <td><?php echo $row["fibersFood"]; ?></td>
                    <td><?php echo $row["vitaminsFood"]; ?></td>
                    <td>
                        <a href="?c=food&a=update&alicode=<?php echo $row['code_food'];?>">
                            <img src="views/assets/images/images_principal/Edit.png" alt="" class="edit001">
                        </a>
                        <a href="?c=food&a=delete&alicode=<?php echo $row['code_food'];?>">
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
