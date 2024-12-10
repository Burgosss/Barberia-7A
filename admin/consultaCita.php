<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php session_start(); 
?>
<style>
    *{
        color:white;
    }
</style>
<table class="table table-striped">
<a href="../Static/convertirpdf/excel3.php"><img src="../Static/convertirpdf/images/excel.png" width="70" height="50"></a>
<a href="../Static/convertirpdf/reporte3.php"><img src="../Static/convertirpdf/images/pdf.png" width="45" height="50"></a>
    
    <thead>
    <tr>
        <th>Id </th>
        <th>Comentarios </th>
        <th>Horario de la cita </th>
        <th>Id del servicio </th>
        <th>Id del usuario</th>
    </tr>
    </thead>
    
    <?php
        $sql = "select * from cita;";
        $exec=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($exec)){
        ?>
            <tr>
                <th> <?php echo $rows['IdCita']; ?> </th>
                <th> <?php echo $rows ['Comentarios']; ?> </th>
                <th> <?php echo $rows ['HorarioCita']; ?> </th>
                <th> <?php echo $rows ['IdServicios']; ?> </th>
                <th> <?php echo $rows ['IdUserWeb']; ?> </th>
            </tr>

        <?php }  ?>
    
</table>
<p><a href="./admin.php"><img src="../Static/img/back.png"></p>
<?php  include '../includes/footer.php'; ?>