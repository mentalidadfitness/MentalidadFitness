  <div class="bodyMF"></div>
  <!-- LOGIN -->
  <div class="container" style="position:absolute;z-index:0">
    <div class="row">
      <div class="col-xs-12 col-md-4 col-md-offset-4">
          <img src="views/assets/images/images_principal/LogoMF.png" class="img-responsive MF_logoMF">
              <form class="MF_formulario" name="form" id="frmSignIn" method="post" data-parsley-validate>
                <!-- INPUT EMAIL -->
                <div class="form-group">
                  <input type="text" class="form-control MF_inputemail" name="data[]" required="" data-parsley-type id="email">
                  <label class="MF_email"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
                </div>
                <!-- INPUT CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control MF_inputpass" name="data[]" required="" id="pass">
                  <label class="MF_password"><i class="fa fa-lock" aria-hidden="true"></i> CONTRASEÑA</label>
                </div>
                <!-- BOTON DE ENTRADA -->
                <button type="submit" class="btn btn-default MF_button" id="btnSignIn">ENTRAR</button>
                <!-- REDES SOCIALES -->
                <div class="row" style="padding-bottom:10%">
                  <div class="col-xs-2 col-xs-offset-2">
                    <a href="URL-FACEBOOK" target="_blank"><img alt="siguenos en facebook" class="img-circle" height="40" src="http://2.bp.blogspot.com/-GlLV_MydcBk/UiX09MYOSfI/AAAAAAAAB18/5vkDADo6qEw/s1600/Facebook+alt+1.png" title="siguenos en facebook" width="40" /></a>
                  </div>
                  <div class="col-xs-2">
                    <a href="URL-Google+" target="_blank"><img alt="siguenos en Google+" class="img-circle" height="40" src="http://3.bp.blogspot.com/-IwxItZ1_cM0/UiX0-g2DrCI/AAAAAAAAB1c/hOSA6Uklo-I/s1600/Google%252B+alt.png" title="siguenos en Google+" width="40" /></a>
                  </div>
                  <div class="col-xs-2">
                    <a href="URL-Twitter" target="_blank"><img alt="siguenos en Twitter" class="img-circle" height="40" src="http://2.bp.blogspot.com/-CaF1EOBAWj4/UiX1AxmkZuI/AAAAAAAAB2Y/IioIplosXNo/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="40" /></a>
                  </div>
                </div>
                <!-- BOTONES DE REGISTRO Y RECUPERAR CUENTA -->
                <div class="row">
                  <div class="col-xs-6">
                    <button type="button" class="btn btn-default MF_btnreg" name="button"><a href="index.php?c=views&a=signUp" style="text-decoration:none;color:white">REGISTRATE</a></button>
                  </div>
                  <div class="col-xs-6">
                    <button type="button" class="btn btn-default MF_btnrec" name="button"><a href="index.php?c=views&a=forgetPass" style="text-decoration:none;color:black">RECUPERAR CUENTA</a></button>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>



  <!-- <form action="?c=access&a=signIn" method="post" name="formLogin"> -->
  <!-- <input type="email" class="form-control" placeholder="Email" required="Este campo es obligatorio" name="data[]"> -->


  <!-- <input type="password" class="form-control" placeholder="Contraseña" required="Este campo es obligatorio" name="data[]"> -->
