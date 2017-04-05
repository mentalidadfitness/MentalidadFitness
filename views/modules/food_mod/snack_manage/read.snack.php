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
                    foreach ($this->SnackM->readSnack() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameSnack"]; ?></td>
                        <td><?php echo $row["descriptionSnack"]; ?></td>
                        <td>
                            <a href="?c=snack&a=update&scode=<?php echo $row['code_snack'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=snack&a=delete&scode=<?php echo $row['code_snack'];?>">
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
