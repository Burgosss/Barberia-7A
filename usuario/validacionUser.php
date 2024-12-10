<?php include '../Static/connect/db.php' ?>
<?php include '../includes/header.php' ?>
<?php
session_start();

$user = $_POST['usuario'];
$password = $_POST['contrasena'];

$sql = "select * from usuariosWeb where nomUser = '$user' and password = '$password'; ";
$execute = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($execute);

if($row>0){
    $_SESSION['usuario']=$user;
    $_SESSION['idUsuario'] = $row['IdUserWeb']; 
    header("Location:userMenu.php");
}else{
    header("Location:loginUser.php");
}

?>