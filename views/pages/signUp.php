  <body id="bodyMF2">
    <!-- LOGIN -->
    <div class="container" style="position:absolute;z-index:0">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
              <img src="views/assets/images/images_principal/LogoMFazul.png" class="img-responsive" id="MF_logoMF">
              <form class="" name="form" action="?c=access&a=signIn" method="post" id="MF_formulario">
                <!-- INPUT NOMBRE -->
                <div class="form-group">
                  <input type="email" class="form-control" name="data[]" id="MF_inputemail3" required="">
                  <label id="MF_email"><i class="fa fa-user" aria-hidden="true"></i> NOMBRE</label>
                </div>
                <!-- INPUT EMAIL -->
                <div class="form-group">
                  <input type="password" class="form-control" name="data[]" id="MF_inputpass3" required="">
                  <label id="MF_password"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
                </div>
                <!-- INPUT CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control" name="data[]" id="MF_inputpass3" required="">
                  <label id="MF_password"><i class="fa fa-lock" aria-hidden="true"></i> CONTRASEÑA</label>
                </div>
                <!-- INPUT REPETIR CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control" name="data[]" id="MF_inputpass3" required="">
                  <label id="MF_password"><i class="fa fa-lock" aria-hidden="true"></i> REPETIR CONTRASEÑA</label>
                </div>
                <!-- BOTON DE ENTRADA -->
                <button type="submit" class="btn btn-default" id="MF_buttonazul">REGISTRARTE</button>
              </form>
        </div>
      </div>
    </div>




  <!-- <form action="?c=access&a=signIn" method="post" name="formLogin"> -->
  <!-- <input type="email" class="form-control" placeholder="Email" required="Este campo es obligatorio" name="data[]"> -->


  <!-- <input type="password" class="form-control" placeholder="Contraseña" required="Este campo es obligatorio" name="data[]"> -->