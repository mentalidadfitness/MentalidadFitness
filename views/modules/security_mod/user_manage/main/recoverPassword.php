<?php $user = $this->UserM->readUserByToken($field) ?>
<div class="bodyMF"></div>
<!-- RECUPERAR CONTRASEÑA -->
<div class="container" style="position:absolute;z-index:0">
  <div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
      <img src="views/assets/images/images_principal/LogoMF.png" class="img-responsive MF_logoMF">
        <form class="MF_formulario" action="index.php?c=user&a=resetPassword" method="post" data-parsley-validate>
          <!-- NUEVA CONTRASEÑA -->
        <div class="form-group">
          <input type="password" class="form-control MF_inputemail" name="data[]" required="">
          <label class="MF_email"><i class="fa fa-lock" aria-hidden="true"></i> Nueva Contraseña</label>
        </div>
          <!-- CONFIRMAR NUEVA CONTRASEÑA -->
        <div class="form-group">
          <input type="password" class="form-control MF_inputemail" name="data[]" required="">
          <label class="MF_email"><i class="fa fa-lock" aria-hidden="true"></i> Confirmar Nueva Contraseña</label>
        </div>
        <div class="form-group">
            <input type="hidden" readonly value="<?php echo $user['token'];?>" name="data[]">
        </div>
            <button type="submit" class="btn btn-default MF_button1">Modificar Contraseña</button>
      </form>
    </div>
  </div>
</div>
