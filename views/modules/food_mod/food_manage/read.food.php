<div class="">
<div class="">
    <table id="dataTable" class="" width="100%">
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
                foreach ($this->FoodM->readFood() as $row) {
                    $item++;
            ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td><?php echo $row["nameFood"]; ?></td>
                    <td><?php echo $row["proteinsFood"]; ?></td>
                    <td><?php echo $row["caloriesFood"]; ?></td>
                    <td><?php echo $row["sugarsFood"]; ?></td>
                    <td><?php echo $row["carbohydratesFood"]; ?></td>
                    <td><?php echo $row["fibersFood"]; ?></td>
                    <td><?php echo $row["vitaminsFood"]; ?></td>
                    <td>
                        <a href="?c=food&a=update&alicode=<?php echo $row['code_food'];?>">
                            <i class="">border_color</i>
                        </a>
                        <a href="?c=food&a=delete&alicode=<?php echo $row['code_food'];?>">
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
