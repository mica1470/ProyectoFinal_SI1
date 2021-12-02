<?php 

    include("db.php");

   
if (isset($_POST['Agregar']))
{
    $nuevo=trim($_POST['nuevo']);

    session_start();
    if (!isset($_SESSION['CUIL'])) {
        header("Location:index.html");
    }
    
    $Aux=$_SESSION['CUIL'];
    $consulta="UPDATE `centrosalud` SET `Cant_Camas`='$nuevo' WHERE  `CUIL`='$Aux'";
    $resultado= mysqli_query($conexion,$consulta);
     //WHERE  `CUIL`=$_SESSION['CUIL']";
     //WHERE  `Nombre`=$_SESSION['Identificacion']";


    if($resultado){
        ?>
        <?php
        include("CENTRO.php");
        ?>
        <h3 class="alert alert-success" data-dismiss="alert">La actualizacion se ha guardado correctamente.!</h3>

        <?php 
    }else{
        ?>
         <?php
            include("CENTRO.php");
        ?>
                <h3 class="alert alert-warning">Ha ocurrido un error!</h3>
           
        <?php 
    }
}
?>