<?php
 include("db.php");

 $Localidad=$_POST['SSJ'];

 $result = mysqli_query($conexion, "SELECT Latitud,Longitud,Nombre,Cant_Camas FROM centrosalud where Localidad='SSJ'");
 
 // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
 while ($row = mysqli_fetch_array($result)) {
     echo '["' . $row['Latitud'] . ', ' . $row['Longitud'] . '", ' . $row['Nombre'] .'", ' . $row['camas'] .'],';
 }