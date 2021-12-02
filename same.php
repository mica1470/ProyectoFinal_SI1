<?php

include("db.php");

error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION['Identificacion'])) {
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
         <!--BORRAR CACHE XD-->
     <meta http-equiv="Expires" content="0">
     <meta http-equiv="Last-Modified" content="0">
     <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
     <meta http-equiv="Pragma" content="no-cache">

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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

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
                    <a href="#" class="navbar-brand"><i class="fa fa-h-square"></i>ealthJuy</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="SAME.php" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Inicio</a></li>
                         <li><a href="#Contacto" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Contacto</a></li>
                         <li><a href="cerrar_session.php" class="smoothScroll wow fadeInUp" data-wow-delay="0.5s">Cerrar Sesión</a></li>
                    </ul>
               </div>

          </div>

     </nav>
<section>
     <div id="news" >
          <div  id="tituloayuda" class="col-md-12 col-sm-6">
               <h2 class="NuevoTitulo" data-wow-delay="0.4s"> SAME 107</h2>
          </div>

     </div>
</section>
<section>
     <div class="container">
          <div class="row">
               <div class="form-1-2  col-md-4"  id="buscando"> 
               
                    <label for ="bus"> Buscar </label>
                    <input type="text" class="form-control" placeholder="Busqueda..." name="bus" id="bus">
               </div>
               <div id="datos" class="col-md-8">
                    
               </div>

 
          </div>

     </div>
</section>
 <!--gravedad botones-->
 <section>
      <div >
               
               <div class="col-md-4" id="tex">
                    <input type ="text" class="form-control" placeholder="seleccion..." id="seca" readonly onmousedown="return false;" >
                   
                </div> 
           <div class="col-md-8" id="bont">

               <input type="submit"  value="Inmediato" class="botonNuevomica cinco" id="boton_Inm" style="background-color: red;" onclick="javascript_to_php3()">
               <input type="submit" value="Urgencia"class="botonNuevomica cinco" id="boton_Inm"  onclick="javascript_to_php2()" style="background-color:tomato;">
               <input type="button" value="Urgencia-menor"class="botonNuevomica cinco" id="boton_UMenor"onclick="javascript_to_php()" style="background-color:green;">
               
           </div>  
          

          

      </div>
 </section>
    
    

    
     <!-- FOOTER -->
     <footer id="fAngela" data-stellar-background-ratio="2">

          <div id="Contacto" class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informacion de Contacto</h4>
                              <p>Si requiere contactar con algun administrador recurra al siguiente numero</p>
                              
                              <div class="contact-info">
                                  <h4 > CONTACTO: </h4>
                                   <p><i class="fa fa-name">C</i> Grupo: GRUPO 6</p>            
                                   <p><i class="fa fa-phone"></i> Teléfono: 3884470452 </p>
                                   <p> <i class="fa fa-envelope-o"></i> Email: <a href="mailto:sistema_info_g6@gmail.com"> sistema_info_g6@gmail.com </a> </p>
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
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/buscador.js"></script>
     <script src="js/main.js"> </script>
     <script src="js/otro.js"> </script>
     <script src="js/mapa.js"> </script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/0.0.11/push.min.js"></script>
     <script>
            
            toastr.info('Inicio de sesion realizado con éxito.','Bienvenido <?php echo $_SESSION['Identificacion'];?>!', 
          {    
               "progressBar":true
          });
          setInterval("Update()",1000)
     </script>
     
    <script>
      function va(){
          var i=document.getElementById("sec").value = "";
      }
 
    </script>

     <script>
          
          //Funcion Update
          function Update(){
               $(document).ready(function() {
          
               $('#datos').load('phpp/buscar.php');
                    $.ajaxSetup({ cache: false });
               });
          }
     </script>
   
  
 
</body>
</html>