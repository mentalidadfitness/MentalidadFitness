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
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Menu</th>
                    <th>Descripcion</th>
                    <th>Propiedades</th>
                    <th>Secciones</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->PageM->readPage() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["namePage"]; ?></td>
                        <td><?php echo $row["menuPage"]; ?></td>
                        <td><?php echo $row["descriptionPage"]; ?></td>
                        <td><?php echo $row["propertiesPage"]; ?></td>
                        <td><?php echo $row["sectionsPage"]; ?></td>
                        <td><?php echo $row["statusPage"]; ?></td>
                        <td>
                            <a href="?c=page&a=update&pcode=<?php echo $row['code_page'];?>">
                                <img src="views/assets/images/images_principal/Edit.png" alt="" class="edit001">
                            </a>
                            <a href="?c=page&a=delete&pcode=<?php echo $row['code_page'];?>">
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
</div>
