<?php  include '../includes/header.php'?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php 
  session_start();
  $user = $_SESSION['usuario'];
  if(isset($_SESSION['usuario'])){
    echo "<h3> Iniciaste sesion como:".$user." </h3>";
    ?>
    <style>*{
      color:white;
    }</style>
    <a href="logout.php" ><i class="bi bi-box-arrow-right"></i></a>
    <?php
  }else{
    header("Location:login.php");
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
          <h5>Servicios</h5>
          <p><a href="./create.php"><img src="../Static/img/c.png"></a>|
          <a href="../consulta.php"> <img src="../Static/img/r.png"></a>|
          <a href="./act.php"><img src="../Static/img/u.gif"></a>|
          <a href="./eli.php"><img src="../Static/img/d.png"></p></a>|
          <h5>Reservaciones</h5>
          <p><a href="./consultaCita.php"> <img src="../Static/img/r.png"></a>|
          <a href="./eliCita.php"><img src="../Static/img/d.png"></p></a>|
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, rerum, reprehenderit consequatur perferendis officia, vitae fuga animi temporibus itaque atque</p>
            <picture>                      
        <img loading="lazy" src="../Static/img/2.jpg" alt="imagen blog"> 
      </picture>
    </div>
      </div>
</article>          
