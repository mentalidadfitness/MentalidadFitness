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
                    foreach ($this->DEmodel->readDesayuno() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td>
                            <a href="?c=desayuno&a=update&decode=<?php echo $row['cod_desayuno'];?>">
                                <i class="material-icons">border_color</i>
                            </a>
                            <a href="?c=desayuno&a=delete&decode=<?php echo $row['cod_desayuno'];?>">
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
