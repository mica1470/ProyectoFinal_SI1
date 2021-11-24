<?php
     session_start();
     if(!isset($_SESSION['Identificacion'])){
          header("Location:index.html");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hola soy <?php echo $_SESSION['Identificacion'] ?></h2>
</body>
</html>