<?php

include_once("support.php");
require_once("classes/user.php");
include_once("header.php");





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
    <div class="jumbotron">
        <h2>Registro</h2>
    </div>
    <ul class="errors">
      <?php foreach ($errors as $error) : ?>
      <li>
        <?=$error?>
      </li>
    <?php endforeach; ?>
    </ul>
    <form class="" action="register.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
      <label for="usrName">NOMBRE: </label>
      <input id="usrName" class="form-control" type="text" name="usrName" placeholder="Ingresa tu nombre">
      </div>
      <div class="form-group">
      <label for="usrSurname">APELLIDO: </label>
      <input id="usrSurname" class="form-control" type="text" name="usrSurname" placeholder="Ingresa tu apellido">
      </div>
      <div class="form-group">
      <label for="email">EMAIL: </label>
      <input id="email" class="form-control" type="text" name="email" placeholder="ejemplo@correo.com">
      </div>
      <div class="form-group">
      <label for="pass">CONTRASEÑA: </label>
      <input id="pass" class="form-control" type="text" name="pass" placeholder="********" onfocus="confirmarPass();">
      </div>
      <div class="form-group hidden" id="pass2">
      <label for="pass2">CONFIRMAR CONTRASEÑA: </label>
      <input class="form-control" type="text" name="pass2" placeholder="********">
      </div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" >
      </div>
    </form>
  </body>
</html>
<?php include("footer.php"); ?>
