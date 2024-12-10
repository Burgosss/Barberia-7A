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

<a href="../Static/convertirpdf/excel2.php"><img src="../Static/convertirpdf/images/excel.png" width="70" height="50"></a>
<a href="../Static/convertirpdf/reporte2.php"><img src="../Static/convertirpdf/images/pdf.png" width="45" height="50"></a>
    
    <thead>
    <tr>
        <th>Horario de la cita </th>
        <th>Comentarios </th>
    </tr>
    </thead>
    
    <?php
        $opc = $_GET['opc'];
        if($opc==1){
            $sql = "select * from cita;";
        }else if($opc==2){
            $iduser = $_SESSION['idUsuario'];
            $sql = "select * from cita where IdUserWeb = $iduser;";
        }else{
            $idCita= $_GET['idCita'];
            $sql = "select * from cita where IdCita = $idCita;";
        }
        $exec=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($exec)){
        ?>
            <tr>
                <th> <?php echo $rows ['HorarioCita']; ?> </th>
                <th> <?php echo $rows ['Comentarios']; ?> </th>
            </tr>

        <?php }  ?>
        <p><a href="userMenu.php"><img src="../Static/img/back.png"></p>
    
</table>

<?php  include '../includes/footer.php'; ?>