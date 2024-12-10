<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<?php
if(isset($_GET['idCita'])){
    $IdCita = $_GET['idCita'];
    $opc = $_GET['opc'];
    $delete = "delete from cita where IdCita = $IdCita;";
    $execute = mysqli_query($conn,$delete);
    sleep(2);
    header("Location:./eliCita.php");
}
?>
<?php  include '../includes/footer.php'; ?>