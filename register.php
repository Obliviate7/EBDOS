<?php
	include_once("header.php");
	$emailDefault = "";
	$usrNameDefault = "";
	$usrSurnameDefault = "";
	if ($auth->isLogIn()) {
		header("Location:index.php");exit;
	}
	$errors = [];
	if ($_POST) {
			$errors = $validator->validateInformation($_POST, $db);
		if (!isset($errors["usrName"])) {
			$usrNameDefault = $_POST["usrName"];
		}
		if (!isset($errors["email"])) {
			$emailDefault = $_POST["email"];
		}
		if (!isset($errors["usrSurname"])) {
			$usrSurnameDefault = $_POST["usrSurname"];
		}
		if (count($errors) == 0) { 
			$user = new User($_POST);
			$email = $_POST["email"];
			$user->saveImage($email);
			$user = $db->saveUser($user);
			header("Location:index.php?mail=$email");exit;
		}
	}
?>
	<div class="container">
		<div class="page-header">
			<h2>Registro</h2>
		</div>
		<?php foreach ($errors as $error) : ?>
		<ul class="alert alert-danger">
			<li>
				<?=$error?>
			</li>
		</ul>
		<?php endforeach; ?>
		<form class="" action="register.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="usrName">Nombre: </label>
				<input id="usrName" class="form-control" type="text" name="usrName" placeholder="Ingresa tu nombre" value="<?=$usrNameDefault?>">
			</div>
			<div class="form-group">
				<label for="usrSurname">Apellido: </label>
				<input id="usrSurname" class="form-control" type="text" name="usrSurname" placeholder="Ingresa tu apellido" value="<?=$usrSurnameDefault?>">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input id="email" class="form-control" type="text" name="email" placeholder="ejemplo@correo.com" value="<?=$emailDefault?>">
			</div>
			<div class="form-group">
				<label for="pass">Contraseña: </label>
				<input id="pass" class="form-control" type="password" name="pass" placeholder="********" onfocus="confirmPass();">
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
