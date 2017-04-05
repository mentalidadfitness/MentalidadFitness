<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->RoleM->readRole() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nameRole"]; ?></td>
                        <td><?php echo $row["statusRole"]; ?></td>
                        <td>
                            <a href="?c=rol&a=update&rcode=<?php echo $row['code_role'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=rol&a=delete&rcode=<?php echo $row['code_role'];?>">
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
