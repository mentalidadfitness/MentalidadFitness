<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
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
                    foreach ($this->DietM->readDiet() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["daysDiet"]; ?></td>
                        <td><?php echo $row["statusDiet"]; ?></td>
                        <td><?php echo $row["code_breakfast"]; ?></td>
                        <td><?php echo $row["code_lunch"]; ?></td>
                        <td><?php echo $row["code_dinner"]; ?></td>
                        <td><?php echo $row["code_snack"]; ?></td>
                        <td><?php echo $row["code_user"]; ?></td>
                        <td>
                            <a href="?c=diet&a=update&dicode=<?php echo $row['code_myDiet'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=diet&a=delete&dicode=<?php echo $row['code_myDiet'];?>">
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
