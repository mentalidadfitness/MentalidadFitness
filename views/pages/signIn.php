<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MENU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body id="bodyMF">
    <!-- LOGIN -->
    <div class="container" style="position:absolute;z-index:0">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
              <img src="img/LogoMF.png" class="img-responsive" id="MF_logoMF">
              <form class="" name="form" action="?c=access&a=signIn" method="post" id="MF_formulario">
                <!-- INPUT EMAIL -->
                <div class="form-group">
                  <input type="email" class="form-control" name="data[]" id="MF_inputemail" required="">
                  <label id="MF_email"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL</label>
                </div>
                <!-- INPUT CONTRASEÑA -->
                <div class="form-group">
                  <input type="password" class="form-control" name="data[]" id="MF_inputpass" required="">
                  <label id="MF_password"><i class="fa fa-lock" aria-hidden="true"></i> CONTRASEÑA</label>
                </div>
                <!-- BOTON DE ENTRADA -->
                <button type="submit" class="btn btn-default" id="MF_button">ENTRAR</button>
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
                    <button type="button" class="btn btn-default" name="button" id="MF_btnreg">REGISTRATE</button>
                  </div>
                  <div class="col-xs-6">
                    <button type="button" class="btn btn-default" name="button" id="MF_btnrec">RECUPERAR CUENTA</button>
                  </div>
                </div>
              </form>
        </div>
      </div>
    </div>

    <script src="views/assets/js/jquery.min.js"></script>
    <!-- <script src="js/transitionInput.js"></script> -->
    <script src="views/assets/js/bootstrap.min.js"></script>
  </body>
</html>



  <!-- <form action="?c=access&a=signIn" method="post" name="formLogin"> -->
  <!-- <input type="email" class="form-control" placeholder="Email" required="Este campo es obligatorio" name="data[]"> -->


  <!-- <input type="password" class="form-control" placeholder="Contraseña" required="Este campo es obligatorio" name="data[]"> -->
