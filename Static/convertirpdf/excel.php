<?php 
include '../connect/db.php';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="servicios.xls"');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exportación de Servicios a Excel</title>
</head>
<body>
    <h1>CONSULTAR SERVICIOS Y PRECIOS</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>SERVICIOS</th>
                <th>PRECIOS</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM servicios;";
            $resul_services = mysqli_query($conn, $query);

            if ($resul_services) {
                while ($row = mysqli_fetch_array($resul_services)) { ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['Precio']; ?></td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='3'>No se encontraron datos</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
exit; // Termina la ejecución después de enviar los datos
?>
