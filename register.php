<?php
include("header.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      El Baul Dorado - Registro
    </title>
    <script src="js/funciones.js"></script>
    <style media="screen">

    </style>
  </head>
  <body>
    <h2>Registro</h2>
    <form class="" action="register.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <label for="nombre">NOMBRE: </label>
      <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Ingresa tu nombre">
      </div>
      <div class="form-group">
      <label for="apellido">APELLIDO: </label>
      <input id="apellido" class="form-control" type="text" name="apellido" placeholder="Ingresa tu apellido">
      </div>
      <div class="form-group">
      <label for="email">EMAIL: </label>
      <input id="email" class="form-control" type="text" name="email" placeholder="ejemplo@correo.com">
      </div>
      <div class="form-group">
      <label for="pass">CONTRASEÑA: </label>
      <input id="pass" class="form-control" type="text" name="pass" placeholder="********" onfocus="confirmarPass();">
      </div>
      <div class="form-group hidden" id="cpass">
      <label for="cpass">CONFIRMAR CONTRASEÑA: </label>
      <input class="form-control" type="text" name="cpass" placeholder="********">
      </div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" >
      </div>
    </form>
  </body>
</html>
<?php include("footer.php"); ?>
