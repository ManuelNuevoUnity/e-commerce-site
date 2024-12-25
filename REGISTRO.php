<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armoire Universale</title>
    <link rel="stylesheet" href="estilo2.css">
    <link rel="icon" href="rounded-in-photoretrica.png">

</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" id="register-form" action="registrobd.php">
      <h2>Registrarse</h2>
      <input type="text" name="Nombre"placeholder="Ingresa tu nombre Completo Por favor *" required/>
      <input type="text" name="NombreU"placeholder="Nombre de usuario*" required/>
      <input type="text" name="CORREO"placeholder="Correo *" required/>
      <input type="password" name="Contrasena" placeholder="Contraseña *" required/>
      <a class="btn" href="#" onclick="showMessageAndShowLoginForm()">Crear</a>
      <input type="submit" value="Guardar">
      <p class="message">Ya estas Registrado? <a href="#" id="login-link">Entrar</a></p>
    </form>
    <form class="login-form" method="post" id="login-form" action="iniciobd.php">
      <h2></i> Inicio de Sesion</h2>
      <input type="text" name="inicios" placeholder="Username" required />
      <input type="password" name="Contrasenas" placeholder="Password" required/>
      <button type="submit" class="btn">Entrar</button>
      <input type="submit" value="Entrar">
      <p class="message">No tienes cuenta?<a href="#" id="register-link">Crear una cuenta</a></p>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    function showMessageAndShowLoginForm() {
      alert('Registered');
      document.getElementById('register-form').style.display = 'none';
      document.getElementById('login-form').style.display = 'block';
    }

    $(document).ready(function() {
      $('.message a').click(function(){
        $('.register-form').toggle();
        $('.login-form').toggle();
      });

    });
    function toggleMenu() {
        var sidebar = document.getElementById("sidebar");
        var content = document.getElementById("content");
        
        sidebar.classList.toggle("active");
        content.classList.toggle("active");
      }
      
      document.addEventListener("click", function(event) {
        var sidebar = document.getElementById("sidebar");
        var toggleBtn = document.querySelector(".toggle-btn");
        
        if (!sidebar.contains(event.target) && !toggleBtn.contains(event.target) && sidebar.classList.contains("active")) {
          toggleMenu();
        }
      });
  </script>
</body>
<body id="SEGUNDO2">
  <button class="toggle-btn" onclick="toggleMenu()">☰</button>
  
  <div class="sidebar" id="sidebar">
    <ul id="menu">
      <p id="MENUDE">MENU</p>
      <li><a href="REGISTRO.html" target="_blank">REGISTRO</a></li>
      <li><a href="INICIO.html" target="_blank">INICIO</a></li>
      <li><a href="MUJER.html" target="_blank">AREA DE MUJER</a></li>
      <li><a href="HOMBRE.html" target="_blank">AREA DE HOMBRE</a></li>
      <li><a href="AREADENINOSMEN.html" target="_blank">AREA DE NIÑOS</a></li>
      <li><a href="AREASDENINAS.html" target="_blank">AREA DE NIÑAS</a></li>
      <li><p>AREA DE LENCERIA</p></li>
      <li>SOPORTE</li>
    </ul>
  </div>
  </body>
</html>
