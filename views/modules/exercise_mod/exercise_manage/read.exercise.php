<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <table id="dataTable" class="displat table-hover" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Ejercicio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->EJmodel->readEjercicio() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nomEjercicio"]; ?></td>
                        <td><?php echo $row["ejercicio"]; ?></td>
                        <td>
                            <a href="?c=ejercicio&a=update&ejcode=<?php echo $row['cod_ejer'];?>">
                                <i class="material-icons">border_color</i>
                            </a>
                            <a href="?c=ejercicio&a=delete&ejcode=<?php echo $row['cod_ejer'];?>">
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
