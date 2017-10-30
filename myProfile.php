<?php
/*el perfil muestra toda la informacion que esta en la base del usuario logeado,
ARREGLAR:
1  agregar las verificaciones de cada campo, por ejemplo que sean mayor a 3 caracteres,
2  agregar la verificacion que coincida el pass dos veces
3  que muestre si hay errores
4  como la contraseña no la trae, agregar una verificacion que si la contraseña esta vacia dejar la anterior
5 hacer que funcione el subir imagen
6 despues de hacer un cambio, en los input no los muestra, los muestra luego de hacer otro submit, arreglar eso
7 hacer que funcione el radio button
*/
  include_once("header.php");
  // echo "<pre>";
  if ($auth->isLogIn()) {
    $infoUser = $db->getByEmail($_SESSION['userLoginOk']);
    $usrNameDefault =     $infoUser->getUsrName();
    $usrSurnameDefault =  $infoUser->getUsrSurName();
    $birthDateDefault =   $infoUser->getBirthDate();
    $countryDefault =     $infoUser->getCountry();
    $provinceDefault =    $infoUser->getProvince();
    $cityDefault =        $infoUser->getCity();
    $zipCodeDefault =     $infoUser->getZipCode();
    $mobileDefault =      $infoUser->getMobile();
    $addressDefault =     $infoUser->getAddress();
    $webPageDefault =     $infoUser->getWebPage();
    $bioDefault =         $infoUser->getBio();
    //Activar los var_dump para ver que se esta enviando arreglar la persistencia
    //activar los pre para ver los errores
    //  var_dump($infoUser);
    //  var_dump($_POST);
     $_POST["id"] = $infoUser->getId();
    //  var_dump($_POST);
      // var_dump($user);
    // echo $infoUser->getUsrName();
    //  header("Location:index.php");exit;
  }
    // $errors = [];
  //  echo "</pre>";
  if ($_POST) {
    $user = new User($_POST);
    $user = $db->modifyUser($user);
    // $errors = $validator->modifyUser($_POST, $db);
    // if (count($errors) == 0) {
    //     $auth->logIn($_POST["email"]);
    //   header("Location:index.php");
    // }
  }
  else {
  }
  ?>
  <div class="container">
    <div class="page-header">
      <h2>Perfil</h2>
  <!--  </div>
      //foreach ($errors as $error): ?>
    <ul class="alert alert-danger">
      <li>
        < <//$error?
      </li>
    </ul>
    //endforeach; ?> -->
    <form class="" action="myProfile.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="usrName">Nombre: </label>
        <input id="usrName" class="form-control" type="text" name="usrName" placeholder="Nombre" value="<?= $usrNameDefault ?>">
      </div>
      <div class="form-group">
        <label for="usrSurname">Apellido: </label>
        <input id="usrSurname" class="form-control" type="text" name="usrSurname" placeholder="Apellido" value="<?= $usrSurnameDefault?>">
      </div>
      <div class="form-group">
        <label for="birthDate">Fecha de nacimiento: </label>
        <input id="birthDate" class="form-control" type="date" name="birthDate" placeholder="Fecha de nacimiento" value="<?=$birthDateDefault?>">
      </div>
      <div class="form-group">
        <label for="radioGenre">Genero: </label>
      <div class="radio">
        <label><input type="radio" name="radioGenre" value="Mujer" required checked="checked">Mujer</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="radioGenre" value="Hombre">Hombre</label>
      </div>
      <div class="form-group">
        <label for="country">Pais: </label>
        <input id="country" class="form-control" type="text" name="country" placeholder="Pais" value="<?=$countryDefault?>">
      </div>
      <div class="form-group">
        <label for="province">Provincia: </label>
        <input id="province" class="form-control" type="text" name="province" placeholder="Provincia" value="<?=$provinceDefault?>">
      </div>
      <div class="form-group">
        <label for="city">Ciudad: </label>
        <input id="city" class="form-control" type="text" name="city" placeholder="Ciudad" value="<?=$cityDefault?>">
      </div>
      <div class="form-group">
        <label for="zipCode">Codigo postal: </label>
        <input id="zipCode" class="form-control" type="text" name="zipCode" placeholder="Codigo postal" value="<?=$zipCodeDefault?>">
      </div>
      <div class="form-group">
        <label for="mobile">Telefono celular: </label>
        <input id="mobile" class="form-control" type="text" name="mobile" placeholder="Celular" value="<?=$mobileDefault?>">
      </div>
      <div class="form-group">
        <label for="address">Dirección: </label>
        <input id="address" class="form-control" type="text" name="address" placeholder="Direccion" value="<?=$addressDefault?>">
      </div>
      <div class="form-group">
        <label for="webPage">Pagina web: </label>
        <input id="webPage" class="form-control" type="text" name="webPage" placeholder="Pagina web" value="<?=$webPageDefault?>">
      </div>
      <div class="form-group">
        <label for="bio">Bio: </label>
        <textarea id="bio" class="form-control" rows="5" name="bio" placeholder="Biografia" value="<?= $bioDefault ?>"><?= $bioDefault ?></textarea>
      </div>
      <div class="form-group">
        <label for="avatar">Foto de Perfil: </label>
        <input type="file" name="avatar">
      </div>
      <div class="form-group">
        <label for="pass">Contraseña: </label>
        <input id="pass" class="form-control" type="password" name="pass" placeholder="********" onfocus="confirmPass()";>
      </div>
      <div class="form-group hidden" id="pass2">
				<label for="pass2">Confirmar contraseña: </label>
				<input class="form-control" type="password" name="pass2" placeholder="********">
			</div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" >
      </div>
    </form>
    <?php include("footer.php"); ?>
