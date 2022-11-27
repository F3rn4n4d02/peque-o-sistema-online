<?php
 
 

 $Servidor="localhost";
 $Usuario="root";
 $Contraseña="";
 $Bd="practica";

 $conexion=mysqli_connect($Servidor, $Usuario, $Contraseña,$Bd); 
 
 if($conexion -> connect_error){
    die ('error al conectar la base de datos'.$conexion->connect_erron);
 
}

    

?>