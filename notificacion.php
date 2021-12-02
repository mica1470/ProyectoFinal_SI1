<?php 
 include("db.php");
$auxCUIL=$_POST["q"];
$auxNom=$_POST["nameU"];
$auxSame=$_POST["cuil"];

$consulta="INSERT INTO `notificacion`(`CUIL`, `Nombre_Usuario`, `cuil_same`,`id_tpo`) VALUES ('$auxCUIL','$auxNom','$auxSame','1')";
$res1= mysqli_query($conexion,$consulta);

if($res1){
    echo "<script>window.close();</script>";
}

?>