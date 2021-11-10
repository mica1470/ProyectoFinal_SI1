<?php

include("db.php");

if(isset($_POST['submitSave'])){
    $DNI=trim($_POST['dni']);
    $nombre_pac=trim($_POST['name']);
    $obrasoc=trim($_POST['obraS']);
    $gruposang=$_POST['grupo'];
    $alergia_des=$_POST['alergias'];
    if($_POST['checkbox']!=""){
        if(is_array($_POST['checkbox'])){
            while(list()){
                
            }
        }

    }

    $cons="INSERT INTO formulario_1 (DNI, nombre del paciente, obra_social, grupo_sanguineo, alergias_descripcion, enferm_car, enferm_ven, enferm_vih, enferm_clamidia, enferm_gonorrea, enferm_herpes, enferm_sifilis) VALUES ('$DNI','$nombre_pac','$obrasoc','$gruposang','$alergia_des','$enfermedades_car','$enfermedades_ven','$enfermedades_vih','$enfermedades_clamidia','$enfermedades_gonorrea','$enfermedades_herpes','$enfermedades_sifilis')";
    $res= mysqli_query($conexion,$cons);

    if($res){
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