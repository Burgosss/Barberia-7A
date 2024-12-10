<?php
  include '../includes/header.php';
  include '../Static/connect/db.php'; // Asegúrate de tener la conexión a la base de datos

  session_start(); 
  $iduser = $_SESSION['idUsuario'];
  
  // Conexión a la base de datos (ajusta según tu archivo de conexión)
  $query = "SELECT Id, Nombre FROM servicios";
  $result = mysqli_query($conn, $query); // Ejecutar la consulta
  
  if (!$result) {
    die('Error al obtener los servicios: ' . mysqli_error($conn));
  }
?>
<link rel="stylesheet" href="../Static/css/app.css">
<h6>AGENDAR UNA CITA</h6>
<form method="POST" name="frm1" id="frm1" action="AgendarC.php">
  <div class="form_container">
    <label for="com" class="formulario_label">Comentarios:</label>
    <input type="text" name="com" id="com" class="formulario_input">
  </div>
  <div class="form_container">
    <label for="fechahora" class="formulario_label">Fecha y Hora:</label>
    <input type="datetime-local" name="fechahora" id="fechahora" class="formulario_input">
  </div>

  <script>
    const fechaActual = new Date();
    const fechaFormateada = fechaActual.toISOString().slice(0, 16);
    document.getElementById('fechahora').min = fechaFormateada;
  </script>

  <div class="form_container">
    <label for="servicio" class="formulario_label">Servicio:</label>
    <select name="servicio" id="servicio" class="formulario_input">
    <option value="" disabled selected>Selecciona un servicio</option>
      <?php
        // Aquí generamos las opciones del select dinámicamente con los servicios de la base de datos
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='" . $row['Nombre'] . "'>" . $row['Nombre'] . "</option>";
        }
      ?>
    </select>
  </div>

  <input type="hidden" name="idUsuario" value="<?php echo $iduser; ?>">
  <br>
  <div class="form_container">
    <input type="submit" value="Enviar Datos" class="formulario_btn" onclick="validacion()">
  </div>
  <script src='../Static/js/appvlidacion.js'></script>
</form>

<p><a href="./userMenu.php"><img src="../Static/img/back.png"></p>

<?php include '../includes/footer.php'; ?>
