<?php
require_once("db.php");
class Validator {

//funciones individuales de validarInformacion
public function checkNameSurname($nameSurname){
 $nameSurname = trim($nameSurname);
 return ! empty($nameSurname) && ctype_alpha($nameSurname)
 && (strlen($nameSurname) > 2 && strlen($nameSurname) < 20);
}
public function checkEmail($email){
 return filter_var($email, FILTER_VALIDATE_EMAIL);
}
public function checkPass($pass){
 $pass = trim($pass);
 return ! empty($pass) && strlen($pass) > 7;
}
public function checkPass2($pass, $pass2){
 return $pass==$pass2;
}

//funcion general para validar toda la info
public function validarInformacion($data, db $db) {
$errors = [];
if (! checkNameSurname($data['usrName'])){
  $errors["usrName"] = "Ingresa un nombre valido";
}
if (! checkNameSurname($data['usrSurName']) {
  $errors["usrSurname"] = "Ingresa un apellido valido";
}
if (! checkEmail($data['email'])) {
  $errors["email"] = "Ingresa un mail valido";
}
if (! checkPass($data['pass'])) {
  $errors["pass"] = "Ingresa un password valido";
}
if (! checkPass2($data['pass'], $data['pass2'])) {
  $errors["pass2"] = "No coincide el password";
}
return $errors;
}

//funcion general para validar el login
  public function loginUser($data, db $db) {
  $errors = [];

  foreach ($data as $key => $value) {
    $data[$key] = trim($value);
  }

  if ($data["email"] == "") {
    $errors["email"] = "Debes completar el mail";
  }
  else if (filter_var($data["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errors["email"] = "Ingresa un mail valido";
  } else if ($db->traerPorMail($data["email"]) == NULL) {
    $errors["email"] = "El usuario no existe";
  }

  $user = $db->getById($data["email"]);

  if ($data["pass"] == "") {
    $errors["pass"] = "Debes completar la contraseña";
  } else if ($user != NULL) {
    if (password_verify($data["pass"], $user->getPassword()) == false) {
      $errors["pass"] = "Contraseña incorrecta";
    }
  }
  return $errors;
  }
}
 ?>
