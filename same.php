<?php
     session_start();
     if(!isset($_SESSION['Identificacion'])){
          header("Location:index.html");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Inicio - SAME</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/logo_SAME.png">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

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
      <!-- HEADER -->
      <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Bienvenido </p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                        <!-- <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>-->
                        <!-- <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>-->
                         <span class="user-icon"><i class="fa fa-user-o"></i> <?php echo $_SESSION['Identificacion'] ?> </span>
                    </div>
               </div>
          </div>
     </header>

   
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
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealthJuy</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                         <li><a href="same.php" class="smoothScroll">Inicio</a></li>
                         <li><a href="#team" class="smoothScroll">Configuración</a></li>
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

                       <h2 class="NuevoTitulo" data-wow-delay="0.6s"> Inicio SAME</h2>
                         <br>
                         <hr>
                         
                    </div>
               </div>
          </div>
     </section>



     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
     <div class="container">
               <div class="row">

                    <div class="about-info">

                              <div class="wow fadeInUp" data-wow-delay="0.8s">

                                   <div class="col-md-7 col-sm-6"> 
                                        <p class="Nuevoh3 " data-wow-delay="0.8s"> Seleccione la region</p> 
                                   <select class=" form-control form-control-lg ">
                                        <option class="region" selected>Region X </option>
                                        <option value="1"> Uno </option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                   </select>
                                   <hr>

                                   </div>
                              
                              </div>
                    
                         </div>
                         
                    <div class="Mapa col-md-6"><br> <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116415.35391370933!2d-65.3690432958156!3d-24.242484918245633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x941b0f4e8bd7a62f%3A0x315150e057f6e499!2sSan%20Salvador%20de%20Jujuy%2C%20Jujuy!5e0!3m2!1ses-419!2sar!4v1636079238476!5m2!1ses-419!2sar" width="600" height="600" style="border:0" allowfullscreen="" loading="lazy"></iframe> </div>


                    <div class="MenorEdad col-md-4 col-md-offset-1">
                     <br> <br>       
                              <div class="form-check"><br>   
                                <input class="form-check-input" type="checkbox" value="Menor" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                               <br>
                                 <p  data-wow-delay="0.8s"> Menor de Edad </p> 
                                </label>
                              </div>  

                    </div>
                     
                     <div class="Gravedad col-md-4 col-md-offset-1">
                         <p  data-wow-delay="0.8s"> Gravedad</p>  
                                   
                         <button type="button" class="boton btn btn-danger"><strong>Rojo</strong></button>
                         <button type="button" onclick="window.location.href='form2_Primera_Atencion.php'; "  class="boton btn btn-primary"><strong>Azul</strong></button>
                         <button type="button" onclick="window.location.href='form1_Antec.php'; " class="boton btn btn-success"><strong>Verde</strong></button>

                    </div>

                    <div class="ObraSocial col-md-4 col-md-offset-1 ">
                              <p  data-wow-delay="0.8s"> Obra Social</p>  
                                   <select class="form-control form-control-lg ">
                                      <option class="ObraSocial" selected>... </option>
                                        <option value="Instituto">Instituto de Seguros</option>
                                        <option value="PAMI">PAMI</option>
                                        <option value="Otro">Otro</option>
                                   </select>
                    </div>

                    <div class=" col-md-1 col-md-offset-4 ">
                         <br><br><br>
                         <button type="button" class="Buscar btn btn-light"><strong>Buscar</strong></button>
                    </div>

                          <br><br><br>
                                   <div class="col-md-4 col-md-offset-1"> 
                                        <h3 class= "Lista" data-wow-delay="0.8s"> <strong> Lista Recientes </strong></h3> 

                                           <br><br><br>

                                        <select class="Filtro1 form-control form-control-lg ">
                                             <option class="Filtro" selected>Filtro </option>
                                             <option value="Cercanía">Cercanía</option>
                                             <option value="Camas">N° de Camas</option>
                                             <option value="Tiempo">Tiempo</option>
                                         </select>
                                           <br><br><br>

                                             <table class="Tabla table table-striped">
                                               <thead>
                                                 <tr>
                                                   <th scope="col">#</th>
                                                   <th scope="col">Nombre</th>
                                                   <th scope="col">N° camas</th>
                                                   <th scope="col">Tiempo</th>
                                                 </tr>
                                               </thead>
                                               <tbody>
                                                 <tr>
                                                   <th scope="row">1</th>
                                                   <td>Hospital 1</td>
                                                   <td>5</td>
                                                   <td>2 min.</td>
                                                 </tr>
                                                 <tr>
                                                   <th scope="row">2</th>
                                                   <td>Hospital 2</td>
                                                   <td>7</td>
                                                   <td>13 min.</td>
                                                 </tr>
                                                 <tr>
                                                   <th scope="row">3</th>
                                                   <td>Hospital 3</td>
                                                   <td>9</td>
                                                   <td>39 min.</td>
                                                 </tr>
                                                 <tr>
                                                   <th scope="row">4</th>
                                                   <td>Hospital 4</td>
                                                   <td>11</td>
                                                   <td>200 min.</td>
                                                 </tr>
                                               </tbody>
                                             </table>
                                   </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>           


 

           <!-- FOOTER -->
           <footer data-stellar-background-ratio="5">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12 border-top">
                              <div class="col-md-6 col-sm-6">
                                   <a href="same.php" class="icon-foot"><i class="fa fa-h-square"></i>ealthJuy</a>
                              </div> 
                              <div class="col-md-6 col-sm-6 ">
                                   <div class="copyright-text"> 
                                        <p>Copyright &copy; 2021 Todos los derechos reservados| Design: Grupo6</p>
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