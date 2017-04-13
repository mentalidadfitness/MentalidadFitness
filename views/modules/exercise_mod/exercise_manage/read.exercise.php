<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->ExerciseM->readExercise() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameExercise"]; ?></td>
                        <td><?php echo $row["dateExercise"]; ?></td>
                        <td><?php echo $row["statusExercise"]; ?></td>
                        <td>
                            <a href="?c=exercise&a=update&ejcode=<?php echo $row['code_exercise'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=exercise&a=delete&ejcode=<?php echo $row['code_exercise'];?>">
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
