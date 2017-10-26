<?php
include_once("support.php");
require_once("classes/user.php");
include_once("header.php");

  $emailDefault = "";


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
      El Baul Dorado - Login
    </title>
  </head>
  <body>
    <div class="jumbotron">
        <h2>Login</h2>
    </div>
    <ul class="errors">
  <?php foreach ($errors as $error): ?>
      <li>
        <?=$error?>
      </li>
    <?php endforeach; ?>
    </ul>
    <form class="" action="login.php" method="POST" enctype="multipart/form-data">

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
