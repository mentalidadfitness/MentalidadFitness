<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>contraseña</th>
                    <th>cod_rol</th>
                    <th>cod_ciudad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->USmodel->readUsuario() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["cod_rol"]; ?></td>
                        <td><?php echo $row["cod_ciudad"]; ?></td>
                        <td>
                            <a href="?c=usuario&a=update&uscode=<?php echo $row['cod_usu'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=usuario&a=delete&uscode=<?php echo $row['cod_usu'];?>">
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
