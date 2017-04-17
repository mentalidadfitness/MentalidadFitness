  <body id="bodyMF2">
    <!-- LOGIN -->
    <div class="container" style="position:absolute;z-index:0">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
              <img src="views/assets/images/images_principal/LogoMFazul.png" class="img-responsive" id="MF_logoMF">
              <form class=""  name="form" method="post" id="MF_formulario" data-parsley-validate>
                <!-- INPUT NOMBRE -->
                <div class="form-group">
                  <input type="text" class="form-control" name="data[0]" id="MF_inputemail3" required="" data-parsley-type placeholder="NOMBRE">
                  <!-- <label id="MF_email"><i class="fa fa-user" aria-hidden="true"></i> NOMBRE</label> -->
                </div>
                <!-- INPUT EMAIL -->
                <div class="form-group">
                  <input type="email" class="form-control" name="data[1]" id="MF_inputpass3" required="" data-parsley-type placeholder="EMAIL">
                  <!-- <label id="MF_password"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label> -->
                </div>
                <!-- INPUT CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control" name="data[2]" id="MF_inputpass3" required="" placeholder="CONTRASEÑA">
                  <!-- <label id="MF_password"><i class="fa fa-lock" aria-hidden="true"></i> CONTRASEÑA</label> -->
                </div>
                <!-- INPUT REPETIR CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control" name="data[5]" id="MF_inputpass3" required="" placeholder="CONFIRMAR CONTRASEÑA">
                  <!-- <label id="MF_password"><i class="fa fa-lock" aria-hidden="true"></i> REPETIR CONTRASEÑA</label> -->
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
