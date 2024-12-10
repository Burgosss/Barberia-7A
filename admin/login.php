<?php  include '../Static/connect/db.php';?>
<?php include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
 <H2>Autentificación</H2>
<form method="POST" name="frm1" id="frm1" action="validacion.php">
 <div class="form_container">
    <label for="usuario" class="formulario_label">User:
    <input type="text" name="usuario" id="usuario" class="formulario_input">
    </label>  
</div> 
<div class="form_container">
    <label for="contrasena" class="formulario_label">Password:
    <input type="password" name="contrasena" id="contrasena" class="formulario_input">
    </label>
</div>                  
<div class="form_container">            
    <input type="submit" class="formulario_btn" value="Enviar"> 
</div> 
</form> 
<p><a href="../index.php"><img src="../Static/img/back.png"></p>
<script src="../Static/js/validaciones.js"></script>  