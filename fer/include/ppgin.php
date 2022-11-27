<?php

include "conexion.php";


if(isset($_POST['iniciaregis'])){


    $usuar=$conexion->real_escape_string($_POST['user']);
    $passw=$conexion->real_escape_string($_POST['pass']);
   
    

    $consulta="SELECT * FROM inicio WHERE Usuario='$usuar' and Contraseña= '$passw'";
    if($resultado=$conexion->query($consulta)){
        while($row=$resultado->fetch_array()){
            $userok =$row['Usuario'];
            $passok =$row['Contraseña'];

        }
        $resultado->close();

    }
    $conexion->close();
    if(isset($usuar)  && isset($passw)){
        if($usuar==$userok && $passw== $passok){
          $_SESSION['login']= TRUE;
          $_SESSION['Usuario']= $usuario;

          header("location:esc.html");
      }
      else{
            
            
        header("location:recuperar.html");
    
   }
}

}


?>
