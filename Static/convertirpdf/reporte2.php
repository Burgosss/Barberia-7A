<?php
    include 'plantilla.php'; // Plantilla personalizada del PDF
    include "../connect/db.php"; // Conexión a la base de datos

    session_start(); 

    $iduser = $_SESSION['idUsuario'];
    $sql = "select * from cita where IdUserWeb = $iduser;";
    

    $resultado = mysqli_query($conn, $sql);

    // Crear el objeto PDF
    $pdf = new PDF('P', 'mm', 'letter');
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Encabezados de la tabla
    $pdf->SetFillColor(232, 232, 232); // Color de fondo para los encabezados
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(95, 10, 'Horario de la Cita', 1, 0, 'C', true);
    $pdf->Cell(95, 10, 'Comentarios', 1, 1, 'C', true);

    // Datos de la tabla
    $pdf->SetFont('Arial', '', 12);
    while ($row = mysqli_fetch_array($resultado)) {
        $pdf->Cell(95, 10, utf8_decode($row['HorarioCita']), 1, 0, 'C');
        $pdf->Cell(95, 10, utf8_decode($row['Comentarios']), 1, 1, 'C');
    }

    // Salida del archivo PDF
    $pdf->Output();
?>
