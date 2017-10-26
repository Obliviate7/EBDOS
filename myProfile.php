<<<<<<< HEAD
<<<<<<< Updated upstream
<?php
include_once("support.php");
require_once("classes/user.php");
include_once("header.php");

  $emailDefault = "";
  $usrNameDefault = "";
  $usrSurnameDefault = "";
  $birthDateDefault = "";
  $radioGenreDefault = "";
  $countryDefault = "";
  $provinceDefault = "";
  $cityDefault = "";
  $zipCodeDefault = "";
  $mobileDefault = "";
  $addressDefault = "";
  $webPageDefault = "";
  $bioDefault = "";

if ($auth->isLogIn()) {
  header("Location:index.php");exit;
}
	$errors = [];
	if ($_POST) {
		$errors = $validator->loginUser($_POST, $db);
		if (count($errors) == 0) {
      $auth->logIn($_POST["email"]);
			if (isset($_POST["rememberMe"])) {
				$auth->rememberMe($_POST["email"]);
			}
      header("Location:index.php");
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      El Baul Dorado - Perfil
    </title>
  </head>
  <body>
    <div class="jumbotron">
        <h2>Perfil</h2>
    </div>
    <ul class="errors">
  <?php foreach ($errors as $error): ?>
      <li>
        <?=$error?>
      </li>
    <?php endforeach; ?>
    </ul>
    <form class="" action="myProfile.php" method="POST" enctype="multipart/form-data">

      <label for="usrName">NOMBRE: </label>
        <input id="usrName" class="form-control" type="text" name="usrName" placeholder="Nombre" value="<?=$usrNameDefault?>">
      </div>
      <div class="form-group">
      <label for="usrSurname">APELLIDO: </label>
        <input id="usrSurname" class="form-control" type="text" name="usrSurname" placeholder="Apellido" value="<?=$usrSurnameDefault?>">
      </div>
      <div class="form-group">
      <label for="birthDate">FECHA NACIMIENTO: </label>
        <input id="birthDate" class="form-control" type="text" name="birthDate" placeholder="Fecha de nacimiento" value="<?=$birthDate?>">
      </div>
      <div class="form-group">
      <label for="radioGenre">GENERO: </label>
        <input id="radioGenre" class="form-control" type="text" name="radioGenre" placeholder="Genero" value="<?=$radioGenreDefault?>">
      </div>
      <div class="form-group">
      <label for="country">PAIS: </label>
        <input id="country" class="form-control" type="text" name="country" placeholder="Pais" value="<?=$countryDefault?>">
      </div>
      <div class="form-group">
      <label for="province">PROVINCIA: </label>
        <input id="province" class="form-control" type="text" name="province" placeholder="Provincia" value="<?=$provinceDefault?>">
      </div>
      <div class="form-group">
      <label for="city">CIUDAD: </label>
        <input id="city" class="form-control" type="text" name="city" placeholder="Ciudad" value="<?=$cityDefault?>">
      </div>
      <div class="form-group">
      <label for="zipCode">CODIGO POSTAL: </label>
        <input id="zipCode" class="form-control" type="text" name="zipCode" placeholder="Codigo postal" value="<?=$zipCodeDefault?>">
      </div>
      <div class="form-group">
      <label for="mobile">TELEFONO CELULAR: </label>
        <input id="mobile" class="form-control" type="text" name="mobile" placeholder="Celular" value="<?=$mobileDefault?>">
      </div>
      <div class="form-group">
      <label for="address">DIRECCION: </label>
        <input id="address" class="form-control" type="text" name="address" placeholder="Direccion" value="<?=$addressDefault?>">
      </div>
      <div class="form-group">
      <label for="webPage">PAGINA WEB: </label>
        <input id="webPage" class="form-control" type="text" name="webPage" placeholder="Pagina web" value="<?=$webPageDefault?>">
      </div>
      <div class="form-group">
      <label for="bio">BIO: </label>
        <input id="bio" class="form-control" type="text" name="bio" placeholder="Biografia" value="<?=$bioDefault?>">
      </div>
      <div class="form-group">
      <label for="email">EMAIL: </label>
        <input id="email" class="form-control" type="text" name="email" placeholder="ejemplo@correo.com" value="<?=$emailDefault?>">
      </div>
      <div class="form-group">
      <label for="pass">CONTRASEÑA: </label>
        <input id="pass" class="form-control" type="password" name="pass" placeholder="********">
      </div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" >
      </div>
    </form>
  </body>
</html>



<?php include("footer.php"); ?>
=======
<?php  ?>
<?php include("header.php"); ?>
<?php include("footer.php"); ?>
>>>>>>> Stashed changes
=======
<?php  ?>
<?php include("header.php"); ?>
<?php include("footer.php"); ?>
>>>>>>> parent of bd2eb75... qwwer
