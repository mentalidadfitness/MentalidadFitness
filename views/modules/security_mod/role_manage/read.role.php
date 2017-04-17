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
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->RoleM->readRole() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameRole"]; ?></td>
                        <td><?php echo $row["statusRole"]; ?></td>
                        <td>
                            <a href="?c=role&a=update&rcode=<?php echo $row['code_role'];?>">
                                <img src="views/assets/images/images_principal/Edit.png" alt="" class="edit001">
                            </a>
                            <a href="?c=role&a=delete&rcode=<?php echo $row['code_role'];?>">
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
