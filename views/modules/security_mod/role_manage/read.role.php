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
                    foreach ($this->Rmodel->readRol() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["rolNom"]; ?></td>
                        <td><?php echo $row["estado"]; ?></td>
                        <td>
                            <a href="?c=rol&a=update&rcode=<?php echo $row['cod_rol'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=rol&a=delete&rcode=<?php echo $row['cod_rol'];?>">
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
