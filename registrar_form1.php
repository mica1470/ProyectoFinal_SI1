<?php

include("db.php");

if(isset($_POST['submitSave'])){
    $DNI=$_POST['dni'];
    $nombre_pac=$_POST['nameP'];
    
    $obrasoc=$_POST['obraS'];
    $gruposang=$_POST['grupo'];
    $alergia_des=$_POST['alergias'];
    
    //Consulta
    $cons1="INSERT INTO formulario_1 (DNI, nombre del paciente, obra_social, grupo_sanguineo, alergias_descripcion) VALUES ('$DNI','$nombre_pac','$obrasoc','$gruposang','$alergia_des')";
    //Ejecutar consulta
    $res1= mysqli_query($conexion,$cons1);

    if($res1){
        ?>
        <?php
            include("form2_Primera_Atencion.html");
        ?>
        <h3 class="alert alert-success" data-dismiss="alert">El formulario se ha guardado correctamente.!</h3>
        <?php 
    }else{
        ?>
         <?php
            include("form1_Antec.html");
            
        ?>
                <h3 class="alert alert-warning">Ha ocurrido un error!</h3>
              
        <?php 
    }
}

?>