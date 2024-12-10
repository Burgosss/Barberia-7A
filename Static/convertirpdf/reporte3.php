<?php
    include 'plantilla.php'; // Plantilla personalizada del PDF
    include "../../Static/connect/db.php";

    // Consulta para obtener servicios y sus citas
    $query = "
        SELECT s.Nombre AS Servicio, s.Precio, c.HorarioCita, c.Comentarios, u.Nombre AS Cliente, u.ApellidoPat, u.ApellidoMat 
        FROM servicios s
        LEFT JOIN cita c ON s.Id = c.IdServicios
        LEFT JOIN usuariosweb u ON c.IdUserWeb = u.IdUserWeb;
    ";
    $resultado = mysqli_query($conn, $query);

    // Crear objeto PDF
    $pdf = new PDF('L', 'mm', 'letter');
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Encabezados de la tabla
    $pdf->SetFillColor(232, 232, 232);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(50, 10, 'Servicio', 1, 0, 'C', true);
    $pdf->Cell(25, 10, 'Precio', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Horario Cita', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Comentarios', 1, 0, 'C', true);
    $pdf->Cell(50, 10, 'Cliente', 1, 1, 'C', true);

    // Datos de la tabla
    $pdf->SetFont('Arial', '', 10);
    while ($row = mysqli_fetch_array($resultado)) {
        $cliente = $row['Cliente'] . " " . $row['ApellidoPat'] . " " . $row['ApellidoMat'];
        $pdf->Cell(50, 10, utf8_decode($row['Servicio']), 1, 0, 'C');
        $pdf->Cell(25, 10, "$" . $row['Precio'], 1, 0, 'C');
        $pdf->Cell(50, 10, $row['HorarioCita'], 1, 0, 'C');
        $pdf->Cell(50, 10, utf8_decode($row['Comentarios']), 1, 0, 'C');
        $pdf->Cell(50, 10, utf8_decode($cliente), 1, 1, 'C');
    }

    // Salida del archivo PDF
    $pdf->Output();
?>
