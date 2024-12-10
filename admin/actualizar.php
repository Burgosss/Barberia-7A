<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php

if(isset($_GET['Id'])){
    $Id=$_GET['Id'];
        $query = "select * from servicios where Id=$Id;";
        $resul = mysqli_query($conn, $query);
        if(mysqli_num_rows($resul)==1){
            $row=mysqli_fetch_array($resul);
            $Nombre = $row['Nombre'];
            $Precio = $row['Precio'];
            //echo $Nombre . " | " .$Precio;
        }
    }

        if(isset($_POST['actualizar'])){
            $Id=$_GET['Id'];
            $Nombre=$_POST['Nombre'];
            $Precio=$_POST['Precio'];
            $sql="UPDATE servicios SET Nombre='$Nombre', Precio='$Precio' where Id=$Id;";
            mysqli_query($conn, $sql);
            header("Location: ./act.php");

        }

?>

<form action="./actualizar.php?Id=<?php echo $_GET['Id']; ?>" method="POST">
<div class="form_container">
    <label>Nombre del servicio:
        <Input type="text" name="Nombre" Id="Nombre" value="<?php echo $Nombre;?>">
    </label>
</div>

<div class="form_container">
    <label>Precio de servicio:
        <Input type="text" name="Precio" Id="Precio" value="<?php echo $Precio;?>"
        class=formulario_input">
    </label>
</div>
<br></br>

    <BUTTON name="actualizar" class="formulario_btn"> Actualizar </BUTTON>
?>
">
</form>
<p><a href="./admin.php"><img src="../Static/img/back.png"></p>
<?php  include '../includes/footer.php'; ?>