<?php  include '../Static/connect/db.php';?>
<?php  include '../includes/header.php';?>
<link rel="stylesheet" href="../Static/css/app.css">
<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$apePat = filter_var($_POST['ApellidoP'], FILTER_SANITIZE_STRING); 
$apeMat = filter_var($_POST['ApellidoM'], FILTER_SANITIZE_STRING);

if(!empty($email) && !empty($nombre) && !empty($apePat) && !empty($apeMat)) {
    //para el usuario
    $pat = substr($apePat, 0, 2);
    $mat = substr($apeMat, 0, 2);

    $usuario = strtolower(str_replace(' ', '', $nombre . $pat . $mat));

    //para la contraseña 
    $cNom = substr($nombre, -2);
    $cPat= substr($apePat, -1);
    $cMat= substr($apeMat, -1);
    $cMail = substr($email, -2);
    $cNum= rand(100, 999);
    $contr = strtolower(str_replace(' ', '', $cNom . $cPat . $cMat . $cMail . $cNum));


    $to= $email;
    $subject = "Usuario y contraseña - Barbershop7A";
    $receptor = "BGMO220610@upemor.edu.mx";
    $cuerpo = " su credenciales de acceso son las siguientes. \r\n Usuario: $usuario \r\n Contraseña: $contr \r\n";
    $headers = 'From: BGMO220610@upemor.edu.mx' . "\r\n" . 'Reply-To: BGMO220610@upemor.edu.mx'; 
    
    if(mail($to,$subject,$cuerpo,$headers)){
        $sql = "insert into usuariosWeb (`Nombre`, `ApellidoPat`, `ApellidoMat`, `Correo`, `nomUser`, `password`) values ('$nombre','$apePat','$apeMat','$email','$usuario','$contr');";
        $execute = mysqli_query($conn, $sql);
        sleep(3);
        echo "<script>
        alert('El correo se ha enviado correctamente a $email');
        window.location.href = './loginUser.php';
        </script>";
    }else{
        echo "El correo no se pudo enviar";
        echo "Email destinatario: $to";
        
    }
}
?>
<?php  include '../includes/footer.php'; ?>