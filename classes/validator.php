<?php
  require_once("db.php");
  class Validator {
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
    public function validateInformation($data, db $db) {
      $errors = [];
      if (! $this->checkNameSurname($data['usrName'])){
        $errors["usrName"] = "Ingresa un nombre valido";
      }
      if (! $this->checkNameSurname($data['usrSurname'])) {
        $errors["usrSurname"] = "Ingresa un apellido valido";
      }
      if (! $this->checkEmail($data['email'])) {
        $errors["email"] = "Ingresa un mail valido";
      }
      if (! $this->checkPass($data['pass'])) {
        $errors["pass"] = "Ingresa un password valido";
      }
      if (! $this->checkPass2($data['pass'], $data['pass2'])) {
        $errors["pass2"] = "No coincide el password";
      }
      return $errors;
    }
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
      } else if ($db->getByEmail($data["email"]) == NULL) {
        $errors["email"] = "El usuario no existe";
      }
      $user = $db->getByEmail($data["email"]);
      if ($data["pass"] == "") {
        $errors["pass"] = "Debes completar la contraseña";
      } else if ($user != NULL) {
            // CON pass hasheado (no funcionabien)
          // if (password_verify($data["pass"], $user->getPassword()) == false) {
            // SIN pass hasheado
        if (($data["pass"] == $user->getPassword()) == false) {
          $errors["pass"] = "Contraseña incorrecta";
        }
      }
      return $errors;
    }
  }
?>
