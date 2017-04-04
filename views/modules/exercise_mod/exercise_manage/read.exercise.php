<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
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
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=ejercicio&a=delete&ejcode=<?php echo $row['cod_ejer'];?>">
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
