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
                    foreach ($this->LunchM->readLunch() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameLunch"]; ?></td>
                        <td><?php echo $row["descriptionLunch"]; ?></td>
                        <td>
                            <a href="?c=lunch&a=update&alcode=<?php echo $row['code_lunch'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=lunch&a=delete&alcode=<?php echo $row['code_lunch'];?>">
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
