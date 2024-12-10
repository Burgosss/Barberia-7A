<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<style>
    *{
        color:white;
    }
</style>
<?php
session_start();
$com = $_POST['com'];
$fechahora = $_POST['fechahora'];
$servicio = $_POST['servicio'];
$idUsuario = $_POST['idUsuario'];

if ($idUsuario) {
    $sqll = "select Id from servicios where Nombre = '$servicio';";
    $result = mysqli_query($conn, $sqll);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $idser = $row['Id'];
        
        // Bloque try-catch para manejar la excepción de MySQL
        try{
            $sql = "insert into cita (Comentarios, HorarioCita, IdServicios, IdUserWeb) VALUES ('$com', '$fechahora', $idser, $idUsuario);";
            if (mysqli_query($conn, $sql)) {
                // Inserción exitosa
                $idCita = mysqli_insert_id($conn);
                sleep(3);
                header("Location:consultaCita.php?opc=0&idCita=$idCita");
                exit;
            } else {
                throw new Exception(mysqli_error($conn));
            }
        }catch(Exception $e) {
            // Aquí capturamos el error y mostramos el mensaje amigable
            echo "Error al registrar la cita: ". $e->getMessage();
        }
    }else{
        echo "Servicio no encontrado.";
    }
}else{
    echo "Error de registro";
}
?>
<?php  include '../includes/footer.php'; ?>