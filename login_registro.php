<?php
require 'php/conexion.php';
$errors = array();
if(!empty($_POST)){
  
}
?>

<?php require('./layout/header.php') ?>
<title>Login y registro</title>
<!--Main-->    
<main class="login-register">
    <div class="contenedor__todo">
      <div class="caja__trasera">
        <div class="caja__trasera-login">
          <h3>¿Ya tienes una cuenta?</h3>
          <p>Inicia sesión para entrar en la página</p>
          <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes una cuenta?</h3>
          <p>Regístrate para que puedas iniciar sesión</p>
          <button id="btn__registrarse">Regístrarse</button>
        </div>
      </div>

<!--Formulario de Login y registro-->
      <div class="contenedor__login-register">

<!--Login-->
        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
          <h2>Iniciar Sesión</h2>
          <input type="text" placeholder="Usuario" name="usuario" />
          <input type="password" placeholder="Contraseña" name="contrasena" />
          <p class="recuperar-contrasena">¿Olvidaste tú contraseña?</p>
          <button>Entrar</button>
        </form>

<!--Register-->
        <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
          <h2>Regístrarse</h2>
          <input type="text" placeholder="Nombre completo" name="nombre_completo"/>
          <input type="text" placeholder="Correo Electronico" name="correo" />
          <input type="text" placeholder="Usuario" name="usuario" />
          <input type="password" placeholder="Contraseña" name="contrasena" />
          <button>Regístrarse</button>
        </form>
      </div>
    </div>
</main>

<?php require('./layout/footer.php') ?>