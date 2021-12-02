<?php
    include("..\db.php");

 $salida="";
 $qery= "SELECT * FROM centrosalud";
 if(isset($_POST['consulta'])){
     $q= mysqli_real_escape_string($conexion,$_POST['consulta']);
     $qery= "SELECT id,Nombre,Localidad,Cant_Camas,CUIL from centrosalud
     WHERE Localidad Like '%".$q."%' OR Nombre LIKE '%".$q."%' ";
 }
 $resultado =mysqli_query($conexion,$qery);
 if(mysqli_num_rows($resultado)> 0){
    $salida.=" <table class ='tabla_datos' >
        <thead>
           <tr>
               <th> # </th>
               <th> Centro de Salud </th>
               <th> Camas Disponibles </th>
               <th> Localidad </th>
               
               <th> CUIT </th>
             </tr>   
         </thead>      
        <tbody>";
        while ($fila=mysqli_fetch_assoc($resultado))   
     
        {    
            if($fila['Cant_Camas']==0){
              $salida.="<tr>
              <td style=background-color:red> ".$fila['id']." </td>
              <td style=background-color:red> ".$fila['Nombre']." </td>
              <td style=background-color:red> ".$fila['Cant_Camas']." </td>
              <td style=background-color:red> ".$fila['Localidad']." </td>
             <td style=background-color:red> ".$fila['CUIL']." </td>
    
        </tr> ";
            }else {
                $salida.="<tr>
              <td> ".$fila['id']." </td>
              <td> ".$fila['Nombre']." </td>
              <td> ".$fila['Cant_Camas']." </td>
             <td> ".$fila['Localidad']." </td>
             <td> ".$fila['CUIL']." </td>
    
        </tr> ";
    
            }
           
             
        }
    $salida.="</tbody></table>";

 }  else{
     $salida.="<h20>NO HAY COINCIDENCIAS </h20>";

 }
 echo  $salida;
 mysqli_close($conexion);
?>
