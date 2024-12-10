<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php 
session_start();
$iduser = $_SESSION['idUsuario'];
?>
<style>
    *{
        color:white;
    }
</style>
<h2> Actualizacion de registros </h2>
<table class="table table-striped">

    <thead>
    <tr>
        <th>Id </th>
        <th>Comentarios </th>
        <th>Horario de la cita </th>
        <th>Servicio </th>
        <th>Actualizar</th>
    </tr>
    </thead>
    
    <?php
        $sql = "SELECT IdCita,Comentarios,HorarioCita, Nombre AS NombreServicio FROM cita inner
              JOIN servicios ON IdServicios = Id WHERE IdUserWeb = $iduser;";
        $exec=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($exec)){
        ?>
            <tr>
                <th> <?php echo $rows['IdCita']; ?> </th>
                <th> <?php echo $rows ['Comentarios']; ?> </th>
                <th> <?php echo $rows ['HorarioCita']; ?> </th>
                <th> <?php echo $rows ['NombreServicio']; ?> </th>
                <th> <a href="./actualizarCita.php?IdCita=<?php echo $rows['IdCita']?>"><i class="bi bi-file-arrow-up-fill"></i> </a></th>
            </tr>

        <?php }  ?>
   
</table>
<p><a href="./userMenu.php"><img src="../Static/img/back.png"></p>
<?php  include '../includes/footer.php'; ?>