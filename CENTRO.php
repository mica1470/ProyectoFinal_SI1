
<?php 
    session_start();
    if(!isset($_SESSION['Identificacion'])){
         header("Location:index.html");
    }
    
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
     <meta name="keywords" content="Salud,Centro,same">
     <meta name="author" content="GRUPO6">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
                       
                         <li><a href="CENTRO.php" class="smoothScroll">Inicio</a></li>
                         <li><a href="cerrar_session.php" class="smoothScroll">Cerrar Sesión</a></li>
                    </ul>
               </div>

          </div>

      </nav>

     <!-- ABOUT -->
     <section >
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-6">                               

                       <h2 class="NuevoTitulo" data-wow-delay="0.4s"> Centro de Salud: <?php echo $_SESSION['Identificacion'] ?></h2>
                         <br>
                         <hr>
                         <div class="about-info">

                               <div class="col-md-3 col-sm-6 alert alert-light" role="alert">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                <p class="alert-heading">Same #</p>

                                <hr>
                                <p>El paciente presenta los sintomas... 
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. </p> <br>
                                <hr>
                                <p class="mb-0"> Llegando la Unidad #</p> <br>
                                   <div>
                                     <button class="btn btn-outline-warning" type="submit">Aceptar</button>
                                     <button class="btn btn-outline-warning" type="submit">Cerrar</button>
                                   </div>

                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                              </div>

                                   <form class="col-md-9 col-sm-6">

                                      <p class="Nuevoh3" data-wow-delay="0.8s"> Actualizar camas disponibles</p> <br> 
                                      <div class="col-md-8"><input class="form-control " type="number" placeholder="Ingrese número de camas" aria-label="number"></div>
                                   <div class="col-md-3"> <button class="btn btn-outline-success" type="submit">Agregar</button></div>
                    </div>
                    
               </div>
          </div>
     </section>

     
     <section>
           <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-6"> 
                         <br> <br> 
                      
                         <div class="col-md-9 col-md-offset-3"> <h4 class="Nuevoh3" data-wow-delay="0.6s"> Notificaciones </h4> </div>

                              <br>

                                        <table class="Tabla table table-striped col-md-9 col-md-offset-1" border="2" >
                                             
                                             <thead>
                                                 <tr>
                                                   <th scope="col">DNI</th>
                                                   <th scope="col">Nombre del Paciente</th>
                                                   <th scope="col">Estado</th>
                                                   <th scope="col">Fecha de Traslado</th>
                                                   <th scope="col">Acciones</th>

                                                 </tr>
                                               </thead>
                                            

                                             <?php 
                                             $sql="SELECT * from datos";
                                             $result=mysqli_query($conexion,$sql);

                                             while($mostrar=mysqli_fetch_array($result)){
                                              ?>

                                             <tr>
                                                  <td><?php echo $mostrar['DNI'] ?></td>
                                                  <td><?php echo $mostrar['Nombre del Paciente'] ?></td>
                                                  <td><?php echo $mostrar['Estado'] ?></td>
                                                  <td><?php echo $mostrar['Fecha de Traslado'] ?></td>
                                                  <td><a href=""><?php echo $mostrar['Acciones'] ?></a></td>
                                             </tr>
                                        <?php 
                                        }
                                         ?>
                                        </table>


                         <div class="col-md-3 col-md-offset-9"> <button class="btn btn-outline-success" type="submit">Descargar Comprobantes</button></div>
                         
                    </div>
                    
               </div>
          </div>
     </section>



     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
                    

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 - Nuestro proyecto </p>
                              </div>
                         </div>
                         
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>