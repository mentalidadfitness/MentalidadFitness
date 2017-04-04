<div class="row">
<div class="col-sm-8 col-sm-offset-2">
    <table id="dataTable" class="displat table-hover" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Proteinas</th>
                <th>Calorias</th>
                <th>Azucares</th>
                <th>Carbohidratos</th>
                <th>Fibras</th>
                <th>Vitaminas</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $item = 0;
                foreach ($this->ALImodel->readAlimento() as $row) {
                    $item++;
            ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td><?php echo $row["alimento"]; ?></td>
                    <td><?php echo $row["proteinas"]; ?></td>
                    <td><?php echo $row["calorias"]; ?></td>
                    <td><?php echo $row["azucares"]; ?></td>
                    <td><?php echo $row["carbohidratos"]; ?></td>
                    <td><?php echo $row["fibras"]; ?></td>
                    <td><?php echo $row["vitaminas"]; ?></td>
                    <td>
                        <a href="?c=alimento&a=update&alicode=<?php echo $row['cod_alimento'];?>">
                            <i class="material-icons">border_color</i>
                        </a>
                        <a href="?c=alimento&a=delete&alicode=<?php echo $row['cod_alimento'];?>">
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
