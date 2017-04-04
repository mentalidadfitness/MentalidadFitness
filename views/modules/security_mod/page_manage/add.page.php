<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>GESTIONAR PAGINA</h1>
        </div>
        <div class="col-sm-4 col-sm-offset-4">
            <form class="" action="?c=pagina&a=create" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="data[]" id="name" required>
                </div>
                <div class="form-group">
                    <label for="iconos">Iconos</label>
                    <input type="text" class="form-control" name="data[]" id="ico" required></textarea>
                </div>
                <div class="form-group">
                    <label for="menu">Menu</label>
                    <input type="text" class="form-control" name="data[]" id="men" required>
                </div>
                <div class="form-group">
                    <label for="colores">Colores</label>
                    <input type="text" class="form-control" name="data[]" id="col" required>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name="data[]" id="url" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" class="form-control" name="data[]" id="fot" required>
                </div>
                <div class="form-group">
                    <label for="des">Descripcion</label>
                    <input type="text" class="form-control" name="data[]" id="des" required>
                </div>
                <div class="form-group">
                    <label for="botones">Botones</label>
                    <input type="text" class="form-control" name="data[]" id="bot" required>
                </div>
                <div class="form-group">
                    <label for="propiedades">Propiedades</label>
                    <input type="text" class="form-control" name="data[]" id="pro" required>
                </div>
                <div class="form-group">
                    <label for="secciones">Secciones</label>
                    <input type="text" class="form-control" name="data[]" id="sec" required>
                </div>
                <div class="form-group">
                    <label for="imagenes">Imagenes</label>
                    <input type="text" class="form-control" name="data[]" id="img" required>
                </div>
                <div class="form-group">
                    <label for="estatus">Estado</label>
                    <input type="text" class="form-control" name="data[]" id="est" required>
                </div>
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-primary" href="?c=main&a=dashboard">ATRÁS</a>
                    <button class="btn btn-success">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
