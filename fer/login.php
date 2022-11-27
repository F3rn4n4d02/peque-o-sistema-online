<?php

include "include/conexion.php";
include "include/ppgin.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>

    <form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <h2 class="text-center">Inicar sesion</h2>
        
         <label for=""> escribe tu usuario</label><br>
         <input type="text" id="userr" name="user" placeholder="Usuario" required><br><br>

         <label for=""> escribe tu contraseña </label><br>
         <input type="password" id="passww" name="pass" placeholder=" contraseña " required><br><br>



         <button class="btn btn-danger" type="submit" Value="entrar" name="iniciaregis">Iniciar</button>

    </form>

    
</body>
</html>