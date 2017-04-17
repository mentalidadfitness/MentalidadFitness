<div class="bodyMF2"></div>
<!-- BOTON ATRAS -->
<a href="index.php" class="btn btn-default MF_btnBack" name="button"><i class="fa fa-arrow-left fa-2x" aria-hidden="true" style="color: #1ba2da;"></i></a>
<!-- SINGUP -->
<div class="container" style="position:absolute;z-index:0">
  <div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <img src="views/assets/images/images_principal/LogoMFazul.png" class="img-responsive MF_logoMF">
          <form class="MF_formulario" name="form" method="post" action="index.php?c=user&a=create" id="frmsignUp" data-parsley-validate>
                <!-- INPUT NOMBRE -->
                <div class="form-group">
                  <input type="text" class="form-control MF_inputblue" name="data[]" required="" data-parsley-type>
                  <label class="MF_email"><i class="fa fa-user" aria-hidden="true"></i> NOMBRE</label>
                </div>
                <!-- INPUT EMAIL -->
                <div class="form-group">
                  <input type="text" class="form-control MF_inputblue" name="data[]" required="" data-parsley-type>
                  <label class="MF_email"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
                </div>
                <!-- INPUT CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control MF_inputblue" name="data[]" required="">
                  <label class="MF_email"><i class="fa fa-lock" aria-hidden="true"></i> CONTRASEÑA</label>
                </div>
                <!-- INPUT REPETIR CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control MF_inputblue" name="data[]" required="">
                  <label class="MF_email"><i class="fa fa-lock" aria-hidden="true"></i> REPETIR CONTRASEÑA</label>
                </div>
                <!-- BOTON DE ENTRADA -->
                <button type="submit" class="btn btn-default MF_buttonazul">REGISTRARTE</button>
              </form>
        </div>
      </div>
    </div>




  <!-- <form action="?c=access&a=signIn" method="post" name="formLogin"> -->
  <!-- <input type="email" class="form-control" placeholder="Email" required="Este campo es obligatorio" name="data[]"> -->


  <!-- <input type="password" class="form-control" placeholder="Contraseña" required="Este campo es obligatorio" name="data[]"> -->
