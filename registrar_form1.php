<?php

include("db.php");

if(isset($_POST['Siguiente'])){
   
    $DNI=$_POST['dni'];
    $nombre_pac=$_POST['nameP'];
    $obrasoc=$_POST['obraS'];
    $gruposang=$_POST['grupo'];
    $alergia_des=$_POST['alergias'];
    $enf_card=$_POST['opcion1'];
    $enf_ven=$_POST['opcion2'];
    $venereas='';
    $CUIL=$_POST['CUIL'];

    if(isset($_POST['opcion'])){
        $venereas= implode(',',$_POST['opcion']);
    }

    //Consulta
    $cons1="INSERT INTO `formulario_1`(`DNI`, `nombre_paciente`, `obra_social`, `grupo_sanguineo`, `alergias_descripcion`, `enferm_car`, `enferm_ven`, `venereas`, `CUIL`) VALUES ('$DNI','$nombre_pac','$obrasoc','$gruposang','$alergia_des','$enf_card','$enf_ven','$venereas','$CUIL')";
    //Ejecutar consulta
    $res1= mysqli_query($conexion,$cons1);
    session_start();
    $_SESSION['dniPaciente']=$DNI;

    if($res1){
        ?>
        <?php
            header("Location:form2_Primera_Atencion.php");
        ?>
        <h3 class="alert alert-success" data-dismiss="alert">El formulario se ha guardado correctamente.!</h3>
        <?php 
    }else{
        ?>
         <?php
            include("form1_Antec.php");
            
        ?>
                <h3 class="alert alert-warning">Ha ocurrido un error!</h3>
              
        <?php 
    }
}

?>