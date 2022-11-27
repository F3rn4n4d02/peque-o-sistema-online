<?php

include "include/conexion.php";

error_reporting(0);

$contabla="SELECT * FROM registro ORDER BY Nombre ASC";
$ejconsul=$conexion->query($contabla);







?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tabla dinamica</title>
</head>
<body>
  <div class="conrainer">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <h2 class="text-center"> Tabla dinamica</h2>

      <div class="table-responsive table-hover">
        <table name="tabla" class="td_tabla">
          <thead class="text-muted">
            <th class="text-center"> Nombre</th>
    
            <th class="text-center"> Apellido </th>
    
            <th class="text-center">  User</th>
    
            <th class="text-center"> Gmail</th>

            <th class="text-center"> Opciones</th>
            
    
          </thead>
          <tbody>
          <?php while($row=$ejconsul->fetch_array()){?>
            <tr>
              <td><?php  echo $row ['Nombre']; ?></td>
              <td><?php  echo $row ['Apellido']; ?></td>
              <td><?php  echo $row ['User']; ?></td>
              <td><?php  echo $row ['Gmail']; ?></td>
              <td><a href="#">-Editar</a> <a href="#">-Borrar</a></td>
            
    
            </tr>
    
            <?php }?>
          </tbody>
         </table>
      

    </div>
  </div>



  </div>
</body>
</html>