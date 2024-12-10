<?php  include 'Static/connect/db.php';?>
<?php  include 'includes/header.php';?>
<style>
    *{
        color:white;
    }
</style>
<table class="table table-striped">
    <a href="Static/convertirpdf/excel.php"><img src="Static/convertirpdf/images/excel.png" width="70" height="50"></a>
    <a href="Static/convertirpdf/reporte.php"><img src="Static/convertirpdf/images/pdf.png" width="45" height="50"></a>
    <thead>
    <tr>
        <th>Id </th>
        <th>Servicio </th>
        <th>Costo </th>
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
            </tr>

        <?php }  ?>
    
</table>
<p><a href="javascript:window.history.back();"><img src="./Static/img/back.png"></p>
<?php  include 'includes/footer.php'; ?>