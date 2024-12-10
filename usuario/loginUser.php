<?php  include '../Static/connect/db.php';?>
<?php include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<link rel="stylesheet" href="../Static/js/validaciones.js">

 <H2>Iniciar sesión</H2>
<form method="POST" name="frm1" id="frm1" action="validacionUser.php">
 <div class="form_container">
    <label for="usuario" class="formulario_label">User:
    <input type="text" name="usuario" id="usuario" class="formulario_input">
    <p class="alert alert-danger" id="cor" name="cor" style="display: none;">
            Ingresa un correo valido (FORMATO DE CORREO ERRONEO)
    </p>  
    </label>  
</div> 
<div class="form_container">
    <label for="contrasena" class="formulario_label">Password:
    <input type="password" name="contrasena" id="contrasena" class="formulario_input">
    <p class="alert alert-danger" id="contra" name="contra" style="display: none;">
            Ingresa una contraseña valida 
    </p>  
    </label>
</div>                  
<div class="form_container">            
    <input type="submit" class="formulario_btn" value="Enviar" onclick="Valicacion();"> 
    <p style="font-size: 18px;">¿No tienes un cuenta? <a href="crearCuenta.php">Crear cuenta</a></p>
</div> 
</form> 
<p><a href="../index.php"><img src="../Static/img/back.png"></p>
<script src="../Static/js/validaciones.js"></script>  