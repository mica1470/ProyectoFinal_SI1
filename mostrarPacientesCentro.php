<?php 

include("db.php");


$sql="SELECT * from datos";
$result=mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
     <td><?php echo $mostrar['DNI'] ?></td>
     <td><?php echo $mostrar['Nombre del Paciente'] ?></td>
     <td><?php echo $mostrar['Estado'] ?></td>
     <td><?php echo $mostrar['Fecha de Traslado'] ?></td>
     <td><a href=""><?php echo $mostrar['Acciones'] ?></a></td>
    </tr>
    <?php 
    }
?>