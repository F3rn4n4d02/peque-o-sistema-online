<?php
include "include/conexion.php";

if(isset($_POST['regis'])){


    $nombre=$_POST['nom'];
    $apellidos=$_POST['apell'];
    $geneero=$_POST['genero'];
    $email=$_POST['correo'];
    $userr=$_POST['user'];
    $pass=$_POST['contra'];


    $validar="SELECT * FROM registro WHERE Gmail = '$email' || User ='$userr'";
    $validacon= $conexion->query($validar);
    if($validacon->num_rows >0){
        ?>
        <h3 class="ok"> Tu Nickname y/o Correo ya se encuentran registrados </h3>
        <?php

    }
    else{


    
    $coninser="INSERT INTO  registro ( Nombre, Apellido, Genero, User ,Gmail, Contraseña) VALUES ('$nombre','$apellidos','$geneero','$userr','$email','$pass')";
    $recon=$conexion->query($coninser);

    if($recon){
        echo "registro exitoso";

    }
    else{
        echo"error al insertar";
    }
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <h1>!Registrate!</h1>

    <input type="text" name="nom" placeholder="Nombre"><br><br>

    <input type="text" name="apell" placeholder="Apellido"><br><br>

    <input type="text" name="genero" placeholder="Genero"><br><br>

    <input type="text" name="user" placeholder="User"><br><br>

    <input type="email" name="correo" placeholder="Correo electronico"><br><br>

    <input type="password" name="contra" placeholder="contraseña"><br><br>

    <button class="btn btn-danger" type="submit" Value="registrarse" name="regis">Registrarse</button>
</form>
</body>
</html>