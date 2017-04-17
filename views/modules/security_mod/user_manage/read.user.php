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
                    <th>Email</th>
                    <th>cod_rol</th>
                    <th>cod_ciudad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->UserM->readUser() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameUser"]; ?></td>
                        <td><?php echo $row["emailAcc"]; ?></td>
                        <td><?php echo $row["code_role"]; ?></td>
                        <td><?php echo $row["code_city"]; ?></td>
                        <td>
                            <a href="?c=user&a=update&uscode=<?php echo $row['code_user'];?>">
                              <img src="views/assets/images/images_principal/Edit.png" alt="" class="edit001">
                            </a>
                            <a href="?c=user&a=delete&uscode=<?php echo $row['code_user'];?>">
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
