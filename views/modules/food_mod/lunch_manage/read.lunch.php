<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <table id="dataTable" class="displat table-hover" width="100%">
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
                    foreach ($this->ALmodel->readAlmuerzo() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td>
                            <a href="?c=almuerzo&a=update&alcode=<?php echo $row['cod_almuerzo'];?>">
                                <i class="material-icons">border_color</i>
                            </a>
                            <a href="?c=almuerzo&a=delete&alcode=<?php echo $row['cod_almuerzo'];?>">
                                <i class="material-icons">delete</i>
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
