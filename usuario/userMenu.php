<?php  include '../includes/header.php'?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php 
  session_start();
  $user = $_SESSION['usuario'];
 
  if(isset($_SESSION['usuario'])){
    $iduser = $_SESSION['idUsuario'];
    ?>
    <style>*{
      color:white;
    }</style>
    <p><a href="./logoutUser.php" ><i class="bi bi-box-arrow-right"></i></a>
    <a href="./consultaCita.php?opc=1"> <img src="../Static/img/hor.png" width="80" height="80">
    Consultar fechas y horarios</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="../consulta.php"> <img src="../Static/img/ser.png" width="50" height="50">
    Servicios</a></p>
    <?php
  }else{
    header("Location:./loginUser.php");
  }
?>
<style>
  i{
    font-size:30px;
  }
</style>
<article class="entrada">
    <div class="entrada__imagen">
              <div class="entrada_contenido">
          <h4 class="no-margin">Barbershop México</h4>
          <p><a href="./agendar.php"><img src="../Static/img/c.png">Agendar una cita</a>
          <a href="./consultaCita.php?opc=2"> <img src="../Static/img/r.png">Consultar mis citas </a></p>
          <p><a href="./actCita.php"><img src="../Static/img/u.gif">Actualizar citas</a>
          <a href="./eliCita.php"><img src="../Static/img/d.png">Eliminar citas</p></a></p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque</p>
            <picture>                      
        <img loading="lazy" src="../Static/img/2.jpg" alt="imagen blog"> 
      </picture>
    </div>
      </div>
</article>          
