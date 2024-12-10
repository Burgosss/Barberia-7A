<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<?php
if(isset($_GET['id'])){
    $ID = $_GET['id'];
    $delete = "delete from servicios where id = $ID;";
    $execute = mysqli_query($conn,$delete);
    sleep(2);
    header("Location:./eli.php");
}
?>
<?php  include '../includes/footer.php'; ?>