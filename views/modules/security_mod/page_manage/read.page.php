<div class="">
<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Iconos</th>
                    <th>Menu</th>
                    <th>Colores</th>
                    <th>URL</th>
                    <th>Foto</th>
                    <th>Descripcion</th>
                    <th>Botones</th>
                    <th>Propiedades</th>
                    <th>Secciones</th>
                    <th>Imagenes</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->Pmodel->readPagina() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["iconos"]; ?></td>
                        <td><?php echo $row["menu"]; ?></td>
                        <td><?php echo $row["colores"]; ?></td>
                        <td><?php echo $row["URL"]; ?></td>
                        <td><?php echo $row["foto"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td><?php echo $row["botones"]; ?></td>
                        <td><?php echo $row["propiedades"]; ?></td>
                        <td><?php echo $row["secciones"]; ?></td>
                        <td><?php echo $row["imagenes"]; ?></td>
                        <td><?php echo $row["estado"]; ?></td>
                        <td>
                            <a href="?c=pagina&a=update&pcode=<?php echo $row['cod_pagina'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=pagina&a=delete&pcode=<?php echo $row['cod_pagina'];?>">
                                <i class="">delete</i>
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
