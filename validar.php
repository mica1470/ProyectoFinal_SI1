<?php
    
    include("db.php");
    
        session_start();
        $CUIL=$_POST['CUIL'];
        $Contraseña=$_POST['contraseña'];

        $consulta="SELECT * FROM usuarios where CUIL='$CUIL' and contraseña='$Contraseña'";
        $resultado=mysqli_query($conexion,$consulta);
        
        
        
        $filas=mysqli_fetch_array($resultado);

        if($filas){
            $_SESSION['Identificacion']=$filas['Identificacion'];
            $_SESSION['CUIL']=$filas['CUIL'];
            if($filas['id_tpo']==1){ //SAME
                header("location:SAME.php");
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
                


