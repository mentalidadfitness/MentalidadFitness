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
                    <th>Rol</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    if (!isset($_GET["pag"])) {
                      $de=0;
                    }else{
                      $de=$_GET["de"];
                    }
                    foreach ($this->UserM->readUser($de) as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameUser"]; ?></td>
                        <td><?php echo $row["emailAcc"]; ?></td>
                        <td><?php echo $row["code_role"]; ?></td>
                        <td>
                            <a href="?c=user&a=update&uscode=<?php echo $row['code_user'];?>">
                              <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
                            </a>
                            -
                            <a href="?c=user&a=delete&uscode=<?php echo $row['code_user'];?>">
                                <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red;" onclick="return confirm('¿Estas seguro?');"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                    $contar=$this->UserM->contarUser();
                    $contar=count($contar);
                    $tamano_paginas=5;
                    $tot=ceil($contar/$tamano_paginas);
                    for ($i=1; $i <=$tot ; $i++) {
                ?>
                    <td><a href="index.php?c=user&a=paginacion&pag=<?php echo $i; ?>"><?php echo $i; ?></a></td>
                <?php  }   ?>
            </tbody>
        </table>
    </div>
</div>
