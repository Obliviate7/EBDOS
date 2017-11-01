<?php
  include("header.php");
  $emailDefault = "";
  if ($auth->isLogIn()) {
    header("Location:index.php");exit;
  }
  $errors = [];
  if ($_POST) {
    if (!isset($errors["email"])) {
      $emailDefault = $_POST["email"];
    }
    $errors = $validator->forgotPassword($_POST, $db);
    if (count($errors) == 0) {
      $to      = $_POST["email"];
      $subject = 'Olvidaste la contraseña';
      $txt    = 'Contraseña olvidada';
      $heads = 'From: fabiancrux@hotmail.com' . "\r\n" .
      'Reply-To: fabiancrux@hotmail.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
      mail($to, $subject, $txt, $heads);
      header("Location:index.php");
    }
  }
?>
<div class="container">
  <div class="page-header">
    <h2>Olvide mi contraseña</h2>
  </div>
  <?php foreach ($errors as $error): ?>
  <ul class="alert alert-danger">
    <li>
      <?=$error?>
    </li>
  </ul>
  <?php endforeach; ?>
  <form action="forgotPass.php" method='POST' enctype="multipart/form-data">
    <div class="form-group">
      <p>Ingresa el correo con el que te registraste, enviaremos un link para que recuperes tu contraseña </p>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" name="email" value="<?= $emailDefault ?>">
    </div>
    <div class="form-group">
      <input class="btn btn-success" type="submit" >
    </div>
  </form>
<?php include("footer.php"); ?>
