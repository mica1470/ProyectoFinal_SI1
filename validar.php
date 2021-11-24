<?php
    session_start();
    
    include("db.php");

        $CUIL=$_POST['CUIL'];
        $Contraseña=$_POST['contraseña'];

        $consulta="SELECT * FROM usuarios where CUIL='$CUIL' and contraseña='$Contraseña'";
        $resultado=mysqli_query($conexion,$consulta);    
        $filas=mysqli_fetch_array($resultado);
        
        if($filas){
            $_SESSION['Identificacion']=$filas['Identificacion'];
            if($filas['id_tpo']==1){ //SAME
                header("location:same.php");
                
            }else{
                if($filas['id_tpo']==2){ //Centro
                    header("location:CENTRO.php");
                }else{ //ADMIN
                    header("location:admin.php");
                }
            }
        }else{
            /*
            ?>
            <?php
            include("index.html");
            ?>
            <h3 class="bad">ERROR en la Autentificacion</h3>;
            <?php 
            */
            echo "<script>
                alert('Usuario o contraseña invalidos');
                window.location= 'index.html';
            </script>";
        }     
mysqli_free_result($resultado);


