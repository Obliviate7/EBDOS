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
  $errors["usrName"] = "El nombre es inválido";
}
if (! checkNameSurname($data['usrSurName']) {
  $errors["usrSurname"] = "El apellido es inválido";
}
if (! checkEmail($data['email'])) {
  $errors["email"] = "El email ingresado no es válido";
}
if (! checkPass($data['pass'])) {
  $errors["pass"] = "El password ingresado no es válido";
}
if (! checkPass2($data['pass'], $data['pass2'])) {
  $errors["pass2"] = "El password no coincide";
}
return $errors;
}

//funcion general para validar el login
  public function loginUser($informacion, db $db) {
  $errores = [];
  
  }


}
 ?>
