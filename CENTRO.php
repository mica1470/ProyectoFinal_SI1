<?php

include("db.php");

error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION['Identificacion'])) {
     header("Location:index.html");
}

if(isset($_GET['del']))
{
     $id=$_GET['del'];
     $query=mysqli_query($conexion,"DELETE FROM formulario_1 WHERE id_paciente='$id'");
     header("location:CENTRO.php");
}
session_write_close();
?>


<!DOCTYPE html>
<html lang="en">

<head>

     <title>Inicio - <?php echo $_SESSION['Identificacion'] ?></title>
     <!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="Salud,Centro,Same">
     <meta name="author" content="GRUPO6">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans"> 
     <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="icon" href="images/logo_SAME.png">


     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!--NAV-->

     <!-- MENU -->
     <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container-fluid">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="CENTRO.php" class="navbar-brand"><i class="fa fa-h-square"></i>ealthJuy</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Inicio</a></li>
                         <li><a href="Ayuda.html" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Ayuda</a></li>
                         <li><a href="#Contacto" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Contacto</a></li>
                         <li><a href="cerrar_session.php" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Cerrar Sesión</a></li>
                    </ul>
               </div>

          </div>

     </nav>

     <!-- ABOUT -->

     <section id="news" >
                         <div  id="tituloayuda" class="col-md-12 col-sm-6">
                              <h2 class="NuevoTitulo" data-wow-delay="0.4s"> Centro de Salud: <?php echo $_SESSION['Identificacion'] ?></h2>
                         </div>
          <div class="container" >
               <div class="row">
                    <div class="news-info">
                         <form class="news-thumb wow fadeInUp col-md-12" action="actualizarCamas.php" method="post">

                              <br>
                              <br>
                              <div class="col-md-5">
                                   <h3 class="Nuevoh3" data-wow-delay="0.4s"> Actualizar camas disponibles</h3></div>
                              <div class="col-md-5">
                              <input id="inputcamas" class="form-control col-md-9" name="nuevo" type="number" max="100" min="0" placeholder="Ingrese número de camas" aria-label="number" required >
                              </div>
                               <div class="col-md-2">
                                   <button class="botonNuevomica cinco "  name="Agregar">
                                             <div class="icono">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                       <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                                                  </svg>
                                             </div>
                                             <span>Actualizar</span>
                                   </button>
                              

                              <br>
                              <br></div>
                              <br>
                         </form>
                    </div>
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section  id="news" data-stellar-background-ratio="2">
          <div class="container">
               <div class="row">
                    <div class="news-info">
                              <div class="news-thumb wow fadeInUp col-md-12">
                                   <br>
                                   <h4 class="Nuevoh3" data-wow-delay="0.6s"> Archivos recientes </h4>

                                   <br>
                                   <form class="form-inline" method="post" action="generarPDF.php">


                                        <table class="Tabla table table-striped col-md-12" border="3">

                                             <thead>
                                                  <tr>
                                                       <th class="opciontabla" scope="col">ID</th>
                                                       <th class="opciontabla" scope="col">DNI</th>
                                                       <th class="opciontabla" scope="col">Nombre del paciente</th>
                                                       <th class="opciontabla" scope="col">Obra Social</th>
                                                       <th class="opciontabla" scope="col">Fecha de Traslado</th>
                                                       <th class="opciontabla" scope="col">Acciones</th>


                                                  </tr>
                                             </thead>


                                             <?php
                                             $sql = "SELECT * from formulario_1 WHERE nombre_paciente!='' and CUIL='$_SESSION[CUIL]'";
                                             $result = mysqli_query($conexion, $sql);

                                             while ($mostrar = mysqli_fetch_array($result)) {
                                             ?>
                                                  <tr>
                                                       <td><?php echo $mostrar['id'] ?></td>
                                                       <td><?php echo $mostrar['DNI'] ?></td>
                                                       <td><?php echo $mostrar['nombre_paciente'] ?></td>
                                                       <td><?php echo $mostrar['obra_social'] ?></td>
                                                       <td><?php echo $mostrar['fecha_atencion'] ?></td>
                                                      
                                                  <td><a href="#" id="Borrar" name="Borrar" onclick="preguntar(<?php echo $mostrar['id'] ?>)" > Eliminar </a></td>
                                                  </tr>
                                             <?php
                                             }
                                             ?>
                                        </table>
                             
                                        <br><br>
                                        <div class="col-md-2 col-md-offset-10"> <button type="submit" id="pdf" name="generate_pdf" class="btn btn-success"><i class="fa fa-pdf" aria-hidden="true"></i>
                                                  Exportar a PDF</button><br><br>
                                        </div>
                                        <br><br>
                                        <br><br>
                                   </form> 
                                   <br><br>
                              </div>
                              <hr>
                              <hr>

                    
                    </div>
               </div>
          </div>

     </section>

     <section  id="news" data-stellar-background-ratio="1">
     <div class="contenedor">
               <article>
               <button class="btn btn-success" id="notificacion" onclick="notificar()" >Enviar Notificacion emergente</button>
			<button id="btn-abrir-popup" class="btn-abrir-popup">Abrir Ventana Emergente</button>
		     </article>
               <div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h4 style="  font-weight: bold" >Notificacion abierta</h4>
                    <hr>
                    <h5 class="mb-0"> El paciente presenta sintomas...</h5>
                    <hr>
				<form action="">
                        <p class="mb-0"> Llegando la Unidad al Centro de Salud: <?php echo $_SESSION['Identificacion'] ?> </p> <br>
				</form>
			</div>
		</div>
          </div>    
     </section>

     
     <!-- FOOTER -->
     <footer data-stellar-background-ratio="2">

        <div id="Contacto" class="container">
             <div class="row">
                  <div class="col-md-6 col-sm-4">
                       <div class="footer-thumb"> 
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informacion de Contacto</h4>
                            <p>Si requiere contactar con algun administrador recurra al siguiente numero</p>
                            
                            <div class="contact-info">
                                <h4 > CONTACTO: </h4>
                                 <p><i class="fa fa-name">C</i>Grupo:GRUPO 6</p>            
                                 <p><i class="fa fa-phone"></i> Teléfono: 3884470452 </p>
                                 <p> <i class="fa fa-envelope-o"></i>  Email: <a href="mailto:sistema_info_g6@gmail.com"> sistema_info_g6@gmail.com </a> </p>
                            </div>
                       </div>
                  </div>


                  <div class="col-md-6 col-sm-4"> 
                       <div class="footer-thumb">
                            <div class="opening-hours">
                                 <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horarios disponibles</h4>
                                 <p>Lunes - Viernes <span> 08:00 AM - 08:00 PM</span></p>
                                 <p>Sabados<span>09:00 AM - 05:00 PM</span></p>
                                 <p>Domingos<span>Cerrado</span></p>
                            </div> 

                            <ul class="social-icon">
                                 <li><a href="https://www.facebook.com/profile.php?id=100009407626005" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                 <li><a href="https://twitter.com/MicaGalian" class="fa fa-twitter"></a></li>
                                 <li><a href="https://www.instagram.com/mica.galian/?hl=es" class="fa fa-instagram"></a></li>
                            </ul>
                       </div>
                  </div>



    <div class="col-md-12 col-sm-12 border-top">
         <div class="col-md-4 col-sm-6">
              <div class="copyright-text">
                   <p>Copyright &copy; 2021 - Proyecto del Grupo 6 </p>
              </div>
         </div>

         <div class="col-md-2 col-sm-2 text-align-center">
              <div class="angle-up-btn  text-align-center">
                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
              </div>
         </div>
    </div>

    </div>
    </div>
</footer>


     <!-- SCRIPTS -->

     <script  type="text/javascript">
          document.addEventListener("DOMContentLoaded",function(){
               if(!Notification)
               {
                    alert("No soportan notificaciones tu navegador, abre Chrome o Microsoft Edge");
                    return;
               }
               if (Notification.permission !== "granted") {
                    Notification.requestPermission();
                }});
          function notificar() {
               if (Notification.permission !== "granted") {
                    Notification.requestPermission();
                }else{
                     var notification = new Notification("Notificacion nueva",
                     {
                          icon:"images/logo_SAME.png",
                          body: "Llego una notificacion del personal del SAME"
                     });

                     notification.onclick = function () {
                         var overlay = document.getElementById('overlay'),
                              popup = document.getElementById('popup'),
                              btnCerrarPopup = document.getElementById('btn-cerrar-popup');
                         
                              overlay.classList.add('active');
                              popup.classList.add('active');
                     }
                }
          }
     </script>

     
     <script type="text/javascript"> 
     function preguntar(id)
     {
          if(confirm('¿Estas seguro que deseas eliminar el id del paciente '+id+ '?'))
          {
               window.location.href= "CENTRO.php?del="+id;
          }
     }
     </script>
     
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

     <script>
            toastr.info('Inicio de sesion realizado con éxito.','Bienvenido!', 
          {    
               "progressBar":true
          });
     </script>
     <script src="js/popup.js"></script>
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script>
          function goBack() {
          window.history.go(-2);
          }
</script>
</body>

</html>