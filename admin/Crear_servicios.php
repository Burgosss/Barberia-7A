<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<?php
    $servicio = $_POST['nombre'];
    $precio = $_POST['precio'];
    
    $sql = "insert into servicios (nombre,precio) values ('$servicio', $precio);";
    $execute = mysqli_query($conn, $sql);
    sleep(3);
    header("Location:./create.php");
?>
<?php  include '../includes/footer.php'; ?>