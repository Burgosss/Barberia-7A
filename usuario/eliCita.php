<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php 
session_start();
?>
<style>
    *{
        color:white;
    }
</style>
<h2> Eliminación de Citas </h2>
<table class="table table-striped">

    <thead>
    <tr>
        <th>Id </th>
        <th>Comentarios </th>
        <th>Horario de la cita </th>
        <th>Id del servicio </th>
        <th>Id del usuario</th>
        <th>Eliminar </th>
    </tr>
    </thead>
    
    <?php
        $iduser = $_SESSION['idUsuario'];
        $sql = "select * from cita where IdUserWeb = $iduser;";
        
        $exec=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($exec)){
        ?>
            <tr>
                <th> <?php echo $rows['IdCita']; ?> </th>
                <th> <?php echo $rows ['Comentarios']; ?> </th>
                <th> <?php echo $rows ['HorarioCita']; ?> </th>
                <th> <?php echo $rows ['IdServicios']; ?> </th>
                <th> <?php echo $rows ['IdUserWeb']; ?> </th>
                <th> <a href= "./eliminarCita.php?idCita=<?php   echo $rows['IdCita']  ?> "><i class="bi bi-trash"></i> </a></th>
            </tr>

        <?php }  ?>
    
</table>
<p><a href="./userMenu.php"><img src="../Static/img/back.png"></p>
<?php  include '../includes/footer.php'; ?>