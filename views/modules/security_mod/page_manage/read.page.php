<div class="">
<div class="">
    <div class="">
        <table id="dataTable" class="" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Iconos</th>
                    <th>Menu</th>
                    <th>Colores</th>
                    <th>URL</th>
                    <th>Foto</th>
                    <th>Descripcion</th>
                    <th>Botones</th>
                    <th>Propiedades</th>
                    <th>Secciones</th>
                    <th>Imagenes</th>
                    <th>Estado</th>
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
                        <td><?php echo $row["iconsPage"]; ?></td>
                        <td><?php echo $row["menuPage"]; ?></td>
                        <td><?php echo $row["colorsPage"]; ?></td>
                        <td><?php echo $row["URLPage"]; ?></td>
                        <td><?php echo $row["photoPage"]; ?></td>
                        <td><?php echo $row["descriptionPage"]; ?></td>
                        <td><?php echo $row["buttonsPage"]; ?></td>
                        <td><?php echo $row["propertiesPage"]; ?></td>
                        <td><?php echo $row["sectionsPage"]; ?></td>
                        <td><?php echo $row["imagesPage"]; ?></td>
                        <td><?php echo $row["statusPage"]; ?></td>
                        <td>
                            <a href="?c=page&a=update&pcode=<?php echo $row['code_page'];?>">
                                <i class="">border_color</i>
                            </a>
                            <a href="?c=page&a=delete&pcode=<?php echo $row['code_page'];?>">
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
</div>
