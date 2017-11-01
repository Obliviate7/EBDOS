<?php
  /*
  ARREGLAR:
  - hacer que funcione el radio button de GENERO
  */
  include_once("header.php");
  // echo "<pre>";
  // $radioGenreMujer = "Mujer";
  // $radioGenreHombre = "Hombre";
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
    // GENERO CONSULTAR!
    // if (isset($radioGenreMujer)){
    //   $radioGenreMujer =    $infoUser->getRadioGenre();
    // }
    // $radioGenreHombre =   $infoUser->getRadioGenre();

    //activar los pre para ver los errores
    //  var_dump($infoUser);
    //  var_dump($_POST);
    //  echo "</pre>";
  } else {
    header("Location:index.php");exit;
  }
  $errors = [];
  if ($_POST) {
    $_POST["id"] = $infoUser->getId();
    $errors = $validator->validateInformationProfile($_POST, $db);
    if (!isset($errors["usrName"])) {
      $usrNameDefault = $_POST["usrName"];
    }
    if (!isset($errors["usrSurname"])) {
      $usrSurnameDefault = $_POST["usrSurname"];
    }
    if (!isset($errors["usrSurname"])) {
      $usrSurnameDefault = $_POST["usrSurname"];
    }
    if (count($errors) == 0) {
      if(empty($_POST['pass'])){
        $_POST['pass'] = $infoUser->getPassword();
      }
      $user = new User($_POST);
      $user->saveImage();
      $user = $db->modifyUser($user);
    }
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
  }
  if (glob("avatars/". $infoUser->getId() .  ".*")){
    $img = glob("avatars/". $infoUser->getId() .  ".*")[0];
  }
  ?>
  <div class="container">
    <div class="page-header">
      <h2>Perfil de <?=$infoUser->getEmail()?></h2>
      <img src="<?=$img?>" alt="" width="100">
    </div>
    <?php foreach ($errors as $error) : ?>
		<ul class="alert alert-danger">
			<li>
				<?=$error?>
			</li>
		</ul>
		<?php endforeach; ?>
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
        <label><input type="radio" name="radioGenre" value="Mujer"  checked >Mujer</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="radioGenre" value="Hombre" >Hombre</label>
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
