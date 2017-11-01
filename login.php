<?php
  include_once("header.php");
  $emailDefault = "";
  if ($auth->isLogIn()) {
    header("Location:index.php");exit;
  }
  $errors = [];
  if ($_POST) {
    if (!isset($errors["email"])) {
      $emailDefault = $_POST["email"];
    }
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
  <div class="container">
    <div class="page-header">
      <h2>Login</h2>
    </div>
    <?php foreach ($errors as $error): ?>
    <ul class="alert alert-danger">
      <li>
        <?=$error?>
      </li>
    </ul>
    <?php endforeach; ?>
    <form action="login.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="email">Email: </label>
        <input id="email" class="form-control" type="text" name="email" placeholder="ejemplo@correo.com" value="<?= $emailDefault ?>">
      </div>
      <div class="form-group">
        <label for="pass">Constraseña: </label>
        <input id="pass" class="form-control" type="password" name="pass" placeholder="********">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="rememberMe">Recuerdame</label>
      </div>
      <div class="forgot">
        <a href="forgotPass.php" class="buttonForgotPassword">Olvidé mi contraseña</a>
      </div>
      <div class="form-group">
        <input class="btn btn-success" type="submit" >
      </div>
    </form>
    <?php include("footer.php"); ?>
