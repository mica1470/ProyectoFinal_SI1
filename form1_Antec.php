<?php
     session_start();
     if(!isset($_SESSION['Identificacion'])){
          header("Location:index.html");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Formulario: Antecedentes Medicos</title>
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


     <!-- MENU -->
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
                      <li><a  href="same.html"class="smoothScroll" >Inicio</a></li>
                      <li><a  href="cambiarConstraseña.html" class="smoothScroll">Cambiar contraseña</a></li>
                      <li><a  href="cerrar_session.php" class="smoothScroll">Cerrar Sesión</a></li>
                 </ul>
            </div>

       </div>

   </nav>

     <!-- FORMULARIO 1-->
     <section id="appointmen" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.3s">
                              <h1>Formulario: Antedecentes Médicos</h1>
                          </div>
                          <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form"  action="registrar_form1.php" method="post">

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nombre del paciente </label>
                                        <input type="text" class="form-control" id="name" name="nameP" placeholder="Ingrese nombre del paciente"required="true">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="DNI"> DNI </label>
                                        <input type="number" class="form-control" id="dni" name="dni" placeholder="Ingrese DNI del paciente"required="true">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="telephone">Obra Social</label>
                                        <input type="text" class="form-control" id="obraS" name="obraS" placeholder="Ingrese Obra Social"required="true">
                                   </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="grupo">Grupo Sanguíneo</label>
                                        <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Ingrese Grupo sanguíneo"required="true">
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="alergias">Alergias del paciente</label>
                                        <textarea name="alergias" placeholder="Ingrese alergias del paciente" cols="30" rows="8"></textarea>
                                   </div>

                                    <div class="lista">
                                         <ul>
                                              <li><input type="checkbox" id="cbox1" value="Si" name="first_checkbox"> 
                                                  <label for="cbox1">¿Sufre de enfermedades cardiacas?</label></li>
                                             <li> <input type="checkbox" id="cbox2" value="Si" name="second_checkbox"> 
                                                  <label for="cbox2">¿Sufre enfermedades venereas?</label> </li>
                                             <li> <label>¿Cuales?</label> </li>  
                                             <li><input type="checkbox" id="cbox3" value="Si" name="third_checkbox"> 
                                                  <label for="cbox3">VIH</label></li>
                                             <li> <input type="checkbox" id="cbox4" value="Si" name="fourth_checkbox"> 
                                                  <label for="cbox4">Clamidia</label></li>
                                             <li> <input type="checkbox" id="cbox5" value="Si" name="fifth_checkbox"> 
                                                  <label for="cbox5">Gonorrea</label></li>
                                             <li> <input type="checkbox" id="cbox6" value="Si" name="sixth_checkbox"> 
                                                  <label for="cbox6">Herpes</label></li>
                                             <li> <input type="checkbox" id="cbox7" value="Si" name="seventh_checkbox"> 
                                                  <label for="cbox7">Sifilis</label></li>
                                         </ul>
                                    </div>
                                   
                                   <div class="col-md-12 col-sm-12">
                                        <input type="button"  onclick="window.location.href='form2_Primera_Atencion.php'; "class="form-control" id="cf-submit" name="submitSave" value="Siguiente">
                                        <input type="reset" class="form-control" id="cf-submit" name="submitCancel" value="Cancelar">
                                    <!--<input type="button" onclick="window.location.href='cambiarConstraseña.html';" class="form-control" id="cf-submit" name="submitChangePass" value="Cancelar">  -->
                                   </div>
                              </div>
                        </form>
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
                                   <a href="index.html" class="icon-foot"><i class="fa fa-h-square"></i>ealthJuy</a>
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