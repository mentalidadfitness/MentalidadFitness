<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
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
                    foreach ($this->DinnerM->readDinner() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameDinner"]; ?></td>
                        <td><?php echo $row["descriptionDinner"]; ?></td>
                        <td>
                            <a href="?c=dinner&a=update&cocode=<?php echo $row['code_dinner'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=dinner&a=delete&cocode=<?php echo $row['code_dinner'];?>">
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
