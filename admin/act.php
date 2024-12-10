<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<style>
    *{
        color:white;
    }
</style>
<h2> Actualizacion de registros </h2>
<table class="table table-striped">

    <thead>
    <tr>
        <th>Id </th>
        <th>Servicio </th>
        <th>Costo </th>
        <th>Actualizar </th>
    </tr>
    </thead>
    
    <?php
        $sql = "select * from servicios;";
        $exec=mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($exec)){
        ?>
            <tr>
                <th> <?php echo $rows['Id']; ?> </th>
                <th> <?php echo $rows ['Nombre']; ?> </th>
                <th> <?php echo $rows ['Precio']; ?> </th>
                <th> <a href="./actualizar.php?Id=<?php echo $rows['Id']?>"><i class="bi bi-file-arrow-up-fill"></i> </a></th>
            </tr>

        <?php }  ?>
   
</table>
<p><a href="./admin.php"><img src="../Static/img/back.png"></p>
<?php  include '../includes/footer.php'; ?>