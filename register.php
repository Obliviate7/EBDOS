<?php
	include_once("header.php");
	$emailDefault = "";
	$usrNameDefault = "";
	$usrSurnameDefault = "";
	$hidden="form-group hidden";
	$unhidden="";
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
			$user = $db->saveUser($user);
			$hidden="";
			$unhidden="form-group hidden";
?>
			<script type="text/javascript">
				function reDir(){
				 location.href ="index.php";
				}
				setTimeout ("reDir()", 3000);
			</script>
<?php
		}
	}
?>
	<div class="container containerReg">
		<div class="page-header">
			<div class="<?=$hidden?>">
				<h2>Felicitaciones te registraste con exito!!!!!!</h2>
			</div>
			<h2 class="<?=$unhidden?> titleRegister" >Registro</h2>
		</div>
		<div class="<?=$unhidden?>">
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
				<input id="usrName" oninput="verifNameJs()" class="form-control" type="text" name="usrName" placeholder="Ingresa tu nombre" value="<?=$usrNameDefault?>">
			</div>
			<div class="form-group">
				<label for="usrSurname">Apellido: </label>
				<input id="usrSurname" oninput="verifSurNameJs()" class="form-control" type="text" name="usrSurname" placeholder="Ingresa tu apellido" value="<?=$usrSurnameDefault?>">
			</div>
			<div class="form-group">
				<label for="email">Email: </label>
				<input id="email" oninput="verifEmailJs()" class="form-control" type="text" name="email" placeholder="ejemplo@correo.com" value="<?=$emailDefault?>">
			</div>
			<div id="mailExist" class="">

			</div>
			<div class="form-group">
				<label for="pass">Contraseña: </label>
				<input id="pass" oninput="verifPassJs()" class="form-control" type="password" name="pass" placeholder="********" onfocus="confirmPass();">
			</div>
			<div class="form-group hidden" id="pass2">
				<label for="pass2">Confirmar contraseña: </label>
				<input id="pass2Val" oninput="verifPass2Js()" class="form-control conf-pass" type="password" name="pass2" placeholder="********">
			</div>
			<div class="form-group">
				<input id="submitReg" class="btn btn-lg btn-primary btn-block submitLog" type="submit" value="CONTINUAR">
			</div>
		</form>
		</div>
		<?php include("footer.php"); ?>
