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
                    foreach ($this->LunchM->readLunch() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameLunch"]; ?></td>
                        <td><?php echo $row["descriptionLunch"]; ?></td>
                        <td>
                            <a href="?c=lunch&a=update&alcode=<?php echo $row['code_lunch'];?>">
                                <img src="views/assets/images/images_principal/Edit.png" alt="" class="edit001">
                            </a>
                            <a href="?c=lunch&a=delete&alcode=<?php echo $row['code_lunch'];?>">
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
