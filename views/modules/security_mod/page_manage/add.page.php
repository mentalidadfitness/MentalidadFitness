<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR PAGINA</h1>
        </div>
        <div class="">
            <form class="" action="?c=pagina&a=create" method="post">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="name" required>
                </div>
                <div class="">
                    <label for="iconos">Iconos</label>
                    <input type="text" class="" name="data[]" id="ico" required></textarea>
                </div>
                <div class="">
                    <label for="menu">Menu</label>
                    <input type="text" class="" name="data[]" id="men" required>
                </div>
                <div class="">
                    <label for="colores">Colores</label>
                    <input type="text" class="" name="data[]" id="col" required>
                </div>
                <div class="">
                    <label for="url">URL</label>
                    <input type="text" class="" name="data[]" id="url" required>
                </div>
                <div class="">
                    <label for="foto">Foto</label>
                    <input type="text" class="" name="data[]" id="fot" required>
                </div>
                <div class="">
                    <label for="des">Descripcion</label>
                    <input type="text" class="" name="data[]" id="des" required>
                </div>
                <div class="">
                    <label for="botones">Botones</label>
                    <input type="text" class="" name="data[]" id="bot" required>
                </div>
                <div class="">
                    <label for="propiedades">Propiedades</label>
                    <input type="text" class="" name="data[]" id="pro" required>
                </div>
                <div class="">
                    <label for="secciones">Secciones</label>
                    <input type="text" class="" name="data[]" id="sec" required>
                </div>
                <div class="">
                    <label for="imagenes">Imagenes</label>
                    <input type="text" class="" name="data[]" id="img" required>
                </div>
                <div class="">
                    <label for="estatus">Estado</label>
                    <input type="text" class="" name="data[]" id="est" required>
                </div>
                <div class="">
                    <a class="" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/page_manage/read.page.php'; ?>
</div>
