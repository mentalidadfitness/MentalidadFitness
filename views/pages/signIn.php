  <img class="visible-xs visible-sm" src="views/assets/images/images_principal/Logo.png"  id="logo">
  <img class="visible-xs visible-sm" src="views/assets/images/images_principal/1fit.png"  style="width:100%">
  <img class="visible-xs visible-sm" src="views/assets/images/images_principal/triangulo.png"  id="triangulo">
  <form action="?c=access&a=signIn" method="post" name="formLogin">
    <div class="form-group" id="campo1">
      <input type="email" class="form-control" placeholder="Email" required="Este campo es obligatorio" name="data[]">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" placeholder="Contraseña" required="Este campo es obligatorio" name="data[]">
    </div>
    <button  type="submit" class="btn btn-primary btn-lg btn-block">INICIAR SESIÓN</button>
  </form>
  <p>
    <button  type="button" class="btn btn-default btn-lg" id="btn1">REGISTRATE</button>
    <button  type="button" class="btn btn-default btn-lg" id="btn2">RECUPERAR CUENTA</button>
  </p>
