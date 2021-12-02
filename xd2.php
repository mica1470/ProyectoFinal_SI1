<?php
  include("db.php");
  session_start();

  if(!isset($_SESSION['Identificacion'])){
      header("Location:SAME.php");
  }
  if (!isset($_SESSION['CUIL'])) {
    header("Location:index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <title>user</title>
</head>
<body>
    <h4>¿Desea notificar al centro elegido?</h4>
    <form action="notificacion.php" method="POST">
        <input id="q" name="q" value="<?php echo$_GET['w4'] ?>" type="hidden">
        <input id="nameU" name="nameU" value="<?php echo$_SESSION['Identificacion'] ?>" type="hidden">
        <input id="cuil" name="cuil" value="<?php echo$_SESSION['CUIL'] ?>" type="hidden">
        <button type="submit" class="botonNuevomica cinco">Confirmar</button>
    </form>
  
<script type="text/javascript">
   
</script>
</body>
</html>