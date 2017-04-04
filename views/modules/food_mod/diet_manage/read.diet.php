<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <table id="dataTable" class="displat table-hover" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dias</th>
                    <th>Estado</th>
                    <th>cod_desayuno</th>
                    <th>cod_almuerzo</th>
                    <th>cod_comida</th>
                    <th>cod_snack</th>
                    <th>cod_usu</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->DImodel->readDieta() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["dias"]; ?></td>
                        <td><?php echo $row["estado"]; ?></td>
                        <td><?php echo $row["cod_desayuno"]; ?></td>
                        <td><?php echo $row["cod_almuerzo"]; ?></td>
                        <td><?php echo $row["cod_comida"]; ?></td>
                        <td><?php echo $row["cod_snack"]; ?></td>
                        <td><?php echo $row["cod_usu"]; ?></td>
                        <td>
                            <a href="?c=dieta&a=update&dicode=<?php echo $row['cod_miDieta'];?>">
                                <i class="material-icons">border_color</i>
                            </a>
                            <a href="?c=dieta&a=delete&dicode=<?php echo $row['cod_miDieta'];?>">
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
