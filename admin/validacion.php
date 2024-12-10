<?php include '../Static/connect/db.php' ?>
<?php include '../includes/header.php' ?>
<?php
session_start();

$user = $_POST['usuario'];
$password = $_POST['contrasena'];

$sql = "select * from usuariosAdmin where usuario = '$user' and contrasena = '$password'; ";
$execute = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($execute);

if($row>0){
    $_SESSION['usuario']=$user;
        header("Location:./admin.php");
}else{
    header("Location:./login.php");
}



/* if(($row['usuario']==$user) && ($row['contrasena']==$password)){
    $_SESSION['usuario']=$user;
        header("Location:admin.php");
}else{
    header("Location:login.php");
} */
?>