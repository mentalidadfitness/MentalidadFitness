<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>cod_rol</th>
                    <th>cod_ciudad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->UserM->readUser() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameUser"]; ?></td>
                        <td><?php echo $row["emailAcc"]; ?></td>
                        <td><?php echo $row["code_role"]; ?></td>
                        <td><?php echo $row["code_city"]; ?></td>
                        <td>
                            <a href="?c=user&a=update&uscode=<?php echo $row['code_user'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=usuario&a=delete&uscode=<?php echo $row['code_user'];?>">
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
