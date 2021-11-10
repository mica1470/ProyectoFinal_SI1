<?php

    include("db.php");

        $CUIL=$_POST['CUIL'];
        $Contraseña=$_POST['contraseña'];

        $consulta="SELECT*FROM usuarios where CUIL='$CUIL' and contraseña='$Contraseña'";
        $resultado=mysqli_query($conexion,$consulta);    
        $filas=mysqli_fetch_array($resultado);

        if($filas){
            if($filas['id_tpo']==1){ //SAME
                header("location:same.html");
            }else{
                if($filas['id_tpo']==2){ //Centro
                    header("location:centro.html");
                }else{ //ADMIN
                    header("location:admin.html");
                }
            }
        }else{
            ?>
            <?php
            include("index.html");
            ?>
            <h3 class="bad">ERROR en la Autentificacion</h3>;
            <?php 
        }
mysqli_free_result($resultado);      
mysqli_Close($conexion);


