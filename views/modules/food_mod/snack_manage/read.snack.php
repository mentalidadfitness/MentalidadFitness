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
                    foreach ($this->Smodel->readSnack() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["descripcion"]; ?></td>
                        <td>
                            <a href="?c=snack&a=update&scode=<?php echo $row['cod_snack'];?>">
                                <i class="material-icons">border_color</i>
                            </a>
                            <a href="?c=snack&a=delete&scode=<?php echo $row['cod_snack'];?>">
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
