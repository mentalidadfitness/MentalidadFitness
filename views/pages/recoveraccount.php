  <body id="bodyMF1">
    <!-- RECUPERAR CUENTA -->
    <div class="container" style="position:absolute;z-index:0">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
              <img src="views/assets/images/images_principal/LogoMFrojo.png" class="img-responsive" id="MF_logoMF">
              <form class="" name="form" action="?c=user&a=sendEmailRecoverPassword" method="post" id="MF_formulario">
                <!-- INPUT EMAIL -->
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="MF_inputemailred" required="">
                  <label id="MF_email"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
                </div>
                <!-- BOTON DE ENVIO -->
                <button type="submit" class="btn btn-default" id="MF_button1">ENVIAR</button>
                <div class="row">
                  <div class="col-xs-10 col-xs-offset-1">
                    <!-- DESCRIPCION -->
                    <h4 class="text-center large" style="">Porfavor digite su email, allí le enviaremos un correo para su nueva contraseña.</h4>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>
