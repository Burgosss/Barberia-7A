<?php
    include "../../Static/connect/db.php";

    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=servicios_citas.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $query = "
        SELECT s.Nombre AS Servicio, s.Precio, c.HorarioCita, c.Comentarios, u.Nombre AS Cliente, u.ApellidoPat, u.ApellidoMat 
        FROM servicios s
        LEFT JOIN cita c ON s.Id = c.IdServicios
        LEFT JOIN usuariosweb u ON c.IdUserWeb = u.IdUserWeb;
    ";
    $resultado = mysqli_query($conn, $query);

    echo "<table border='1'>";
    echo "<tr>
            <th>Servicio</th>
            <th>Precio</th>
            <th>Horario de la Cita</th>
            <th>Comentarios</th>
            <th>Cliente</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>" . utf8_decode($row['Servicio']) . "</td>
                <td>$" . $row['Precio'] . "</td>
                <td>" . $row['HorarioCita'] . "</td>
                <td>" . utf8_decode($row['Comentarios']) . "</td>
                <td>" . utf8_decode($row['Cliente'] . " " . $row['ApellidoPat'] . " " . $row['ApellidoMat']) . "</td>
              </tr>";
    }
    echo "</table>";
?>
