<div id="back"></div>

<div class="login-box">
  
  

  <div class="login-box-body">
  <div class="login-logo">

<img src="vistas/img/plantilla/logo_tm.png" class="img-responsive" style="padding:10 px">

</div>
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      
      </div>

      <div class="row">
      <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Mostrar Contraseña
            </label>
          </div>
        </div>
       
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

    <a href="#">Olvide mi Contraseña</a><br>
    <a href="registro" class="text-center">Crear Usuario</a>

   


  </div>

</div>
