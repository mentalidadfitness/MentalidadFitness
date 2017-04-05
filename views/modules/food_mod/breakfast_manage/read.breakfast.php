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
                    foreach ($this->BreakfastM->readBreakfast() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameBreakfast"]; ?></td>
                        <td><?php echo $row["descriptionBreakfast"]; ?></td>
                        <td>
                            <a href="?c=breakfast&a=update&decode=<?php echo $row['code_breakfast'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=breakfast&a=delete&decode=<?php echo $row['code_breakfast'];?>">
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
