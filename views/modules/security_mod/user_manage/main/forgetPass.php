<div class="bodyMF1"></div>

<!-- BOTON ATRAS -->
<a href="index.php" class="btn btn-default MF_btnBack" name="button"><i class="fa fa-arrow-left fa-2x" aria-hidden="true" style="color: #ff3737;"></i></a>
<!-- RECUPERAR CUENTA -->
<div class="container" style="position:absolute;z-index:0">
  <div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
      <img src="views/assets/images/images_principal/LogoMFrojo.png" class="img-responsive MF_logoMF">
        <form class="MF_formulario" name="form" action="?c=user&a=sendEmailRecoverPassword" id="frmForgetPass" method="post" data-parsley-validate>
            <!-- INPUT EMAIL -->
            <div class="form-group">
              <input type="text" class="form-control MF_inputred" name="email" required="" data-parsley-type>
              <label class="MF_emailred"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
            </div>
            <!-- BOTON DE ENVIO -->
            <button type="submit" class="btn btn-default MF_button1">ENVIAR</button>
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1">
                <!-- DESCRIPCION -->
                <h4 class="text-center large" style="">Por favor digite su email, allí le enviaremos un correo para su nueva contraseña.</h4>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
