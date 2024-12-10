<?php
include '../connect/db.php';

// Configuración de las cabeceras para la exportación a Excel
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="citas.xls"');
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exportación de Citas a Excel</title>
</head>
<body>
    <h1>REPORTE DE CITAS POR USUARIO</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Horario de la cita</th>
                <th>Comentarios</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $iduser = $_SESSION['idUsuario'];
            $sql = "SELECT * FROM cita WHERE IdUserWeb = $iduser;";
            

            $exec = mysqli_query($conn, $sql);

            // Validar resultados y mostrar en la tabla
            if ($exec) {
                while ($rows = mysqli_fetch_array($exec)) { ?>
                    <tr>
                        <td><?php echo $rows['HorarioCita']; ?></td>
                        <td><?php echo $rows['Comentarios']; ?></td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='2'>No se encontraron datos</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
exit; // Termina la ejecución después de enviar los datos
?>
