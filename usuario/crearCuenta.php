<?php  include '../Static/connect/db.php';?>
<?php include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
 <H2>Registro de cuenta</H2>
<form method="POST" name="frm1" id="frm1" action="./enviarEmail.php">
 <div class="form_container">
    <label for="nombre" class="formulario_label">Nombre:
    <input type="text" name="nombre" id="nombre" class="formulario_input">
    </label>  
</div> 
<div class="form_container">
    <label for="ApellidoP" class="formulario_label">Apellido paterno:
    <input type="text" name="ApellidoP" id="ApellidoP" class="formulario_input">
    </label>
</div>  
<div class="form_container">
    <label for="ApellidoM" class="formulario_label">Apellido materno:
    <input type="text" name="ApellidoM" id="ApellidoM" class="formulario_input">
    </label>
</div>    
<div class="form_container">
    <label for="" class="formulario_label">Email: 
    <input type="text" name="email" id="email" class="formulario_input">
    </label>
</div>             
<div class="form_container">            
    <input type="submit" class="formulario_btn" value="Enviar"> 
</div> 
</form> 
<p><a href="./userMenu.php"><img src="../Static/img/back.png"></p>
<script src="../Static/js/validaciones.js"></script>