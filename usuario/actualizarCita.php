<?php include '../Static/connect/db.php'; ?>
<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php 
session_start();
$iduser = $_SESSION['idUsuario'];

if (isset($_GET['IdCita'])) {
    $IdCita = $_GET['IdCita']; 
    $query = "SELECT Comentarios,HorarioCita, Nombre AS NombreServicio FROM cita inner
              JOIN servicios ON IdServicios = Id WHERE IdCita = $IdCita;"; 
    $resul = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($resul) == 1) {
        $row = mysqli_fetch_array($resul);
        $Comentarios = $row['Comentarios'];
        $HorarioCita = $row['HorarioCita'];
        $NombreServicio = $row['NombreServicio'];
    } else {
        echo "No se encontró la cita.";
        exit;
    }
} else {
    echo "El ID de la cita no fue proporcionado.";
    exit;
}

if (isset($_POST['actualizar'])) {
    $Comentarios = $_POST['Comentarios'];
    $HorarioCita = $_POST['HorarioCita'];
    $NombreServicio = $_POST['NombreServicio'];
    
    $sqll = "select Id from servicios where Nombre = '$NombreServicio';";
    $result = mysqli_query($conn, $sqll);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $idser = $row['Id'];
        $sql = "UPDATE cita SET Comentarios='$Comentarios', HorarioCita='$HorarioCita', IdServicios='$idser' WHERE IdCita=$IdCita;";
    
        if (mysqli_query($conn, $sql)) {
            header("Location: ./actCita.php");
            exit;
        } else {
            echo "Error al actualizar la cita: " . mysqli_error($conn);
        }
    }else{
        echo "servicio no encontrado";
    }
}
?>

<form action="./actualizarCita.php?IdCita=<?php echo $IdCita; ?>" method="POST">
    <div class="form_container">
        <label>Comentarios:
            <input type="text" name="Comentarios" id="Comentarios" value="<?php echo isset($Comentarios) ? $Comentarios : ''; ?>">
        </label>
    </div>
    <div class="form_container">
        <label for="HorarioCita" class="formulario_label">Fecha y Hora:
            <input type="datetime-local" name="HorarioCita" id="HorarioCita" value="<?php echo isset($HorarioCita) ? $HorarioCita : ''; ?>">
        </label>
    </div>
    <script>
        const fechaActual = new Date();
        const fechaFormateada = fechaActual.toISOString().slice(0, 16);
        document.getElementById('HorarioCita').min = fechaFormateada;
    </script>
    <div class="form_container">
        <label>Servicio: 
            <input type="text" name="NombreServicio" id="NombreServicio" value="<?php echo isset($NombreServicio) ? $NombreServicio: ''; ?>">
        </label>
    </div>
    <br>
    <button name="actualizar" class="formulario_btn">Actualizar</button>
</form>
<p><a href="./userMenu.php"><img src="../Static/img/back.png"></p>
<?php include '../includes/footer.php'; ?>