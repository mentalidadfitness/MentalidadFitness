<div class="">
    <div class="">
        <div class="">
            <h1>GESTIONAR ROL</h1>
        </div>
        <div class="">
            <form class="" action="?c=role&a=create" method="post">
                <div class="">
                    <label for="name">Nombre</label>
                    <input type="text" class="" name="data[]" id="name" required>
                </div>
                <div class="">
                    <label for="estatus">Estado</label>
                    <input class="" name="data[]" id="estado" required>
                </div>
                <div class="">
                    <a class="" href="?c=access&a=dashboard">ATRÁS</a>
                    <button class="">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once 'views/modules/security_mod/role_manage/read.role.php'; ?>
</div>
