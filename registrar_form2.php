<?php

include("db.php");

if(isset($_POST['Enviar'])){
    $name=trim($_POST['name']);
    $unidad=trim($_POST['unidad']);
    $descripcion=trim($_POST['comentario']);
    $gravedad=$_POST['tpo_grav'];

    $consulta="INSERT INTO formulario_2(paramedico, unidad_traslado, descripcion_atencion, gravedad) VALUES ('$name','$unidad','$descripcion','$gravedad')";
    $resultado= mysqli_query($conexion,$consulta);

    if($resultado){
        ?>
        <?php
            include("form2_Primera_Atencion.html");
        ?>
        <h3 class="alert alert-success" data-dismiss="alert">El formulario se ha guardado correctamente.!</h3>
        <?php 
    }else{
        ?>
         <?php
            include("form2_Primera_Atencion.html");
        ?>
                <h3 class="alert alert-warning">Ha ocurrido un error!</h3>
           
        <?php 
    }
}
?>