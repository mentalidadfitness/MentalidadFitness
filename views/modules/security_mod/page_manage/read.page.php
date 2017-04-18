    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Menu</th>
                    <th>Descripcion</th>
                    <th>Propiedades</th>
                    <th>Secciones</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $item = 0;
                    foreach ($this->PageM->readPage() as $row) {
                        $item++;
                ?>
                    <tr>
                        <td><?php echo $item; ?></td>
                        <td><?php echo $row["namePage"]; ?></td>
                        <td><?php echo $row["menuPage"]; ?></td>
                        <td><?php echo $row["descriptionPage"]; ?></td>
                        <td><?php echo $row["propertiesPage"]; ?></td>
                        <td><?php echo $row["sectionsPage"]; ?></td>
                        <td><?php echo $row["statusPage"]; ?></td>
                        <td>
                            <a href="?c=page&a=update&pcode=<?php echo $row['code_page'];?>">
                                <i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:black"></i>
                            </a>
                            -
                            <a href="?c=page&a=delete&pcode=<?php echo $row['code_page'];?>">
                                <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red; "></i>
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
</div>
