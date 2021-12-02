<?php

include("db.php");
include("form2_Primera_Atencion.php");

if(isset($_POST['Enviar'])){
    $name=trim($_POST['name']);
    $unidad=trim($_POST['unidad']);
    $descripcion=trim($_POST['comentario']);
    $fecha=$_POST['fecha'];
  
   if(isset($_POST['CUIL'])){
        $CUIL=$_POST['CUIL'];
    if(!isset($_SESSION['dniPaciente'])){
        $consulta="INSERT INTO formulario_1 (paramedico, unidad_traslado, descripcion_atencion, fecha_atencion, CUIL) VALUES ('$name','$unidad','$descripcion','$fecha','$CUIL')";
   }else{ 
        $DNI8=$_SESSION['dniPaciente']; 
        $cons2="SELECT id from formulario_1 WHERE DNI='$DNI8'";  
        $res2= mysqli_query($conexion,$cons2);
        $fila2=mysqli_fetch_array($res2);
        $consulta="UPDATE formulario_1 SET paramedico='$name', unidad_traslado='$unidad', descripcion_atencion='$descripcion' where id='$fila2[id]'";
        unset( $_SESSION["dniPaciente"] ); 
    }
    }else{
        if(!isset($_SESSION['dniPaciente'])){
            $consulta="INSERT INTO formulario_1 (paramedico, unidad_traslado, descripcion_atencion, fecha_atencion) VALUES ('$name','$unidad','$descripcion', '$fecha')";
       }else{ 
            $DNI8=$_SESSION['dniPaciente']; 
            $cons2="SELECT id from formulario_1 WHERE DNI='$DNI8'";  
            $res2= mysqli_query($conexion,$cons2);
            $fila2=mysqli_fetch_array($res2);
            $consulta="UPDATE formulario_1 SET paramedico='$name', unidad_traslado='$unidad', descripcion_atencion='$descripcion' where id='$fila2[id]'";
            unset( $_SESSION["dniPaciente"] ); 
        }
    }
    $resultado= mysqli_query($conexion,$consulta);

    if($resultado){
        ?>
        <?php
            echo'<script> window.location.href="SAME.php"</script>';
        ?>
        <h3 class="alert alert-success" data-dismiss="alert">El formulario se ha guardado correctamente.!</h3>

        <?php 
    }else{
        ?>
         <?php
            include("form2_Primera_Atencion.php");
        ?>
                <h3 class="alert alert-warning">Ha ocurrido un error!</h3>
           
        <?php 
    }
}
?>