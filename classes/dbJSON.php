<?php
require_once("user.php");
require_once("db.php");

class dbJSON extends db {
  private $file;

//funcion para guardar usuario
  public function saveUser(User $email) {
  $fp = fopen("users.json", "a+");
  $result = fwrite($fp, $email . PHP_EOL);
  return $result;
  }

//trae toda la base del json
  public function getAll() {
  $fp = fopen('users.json', 'r');
  $allDbJSON = json_decode(fgets($fp), true);
  return $allDbJSON;
  }

//trae la info del usuario buscado por mail
  public function getByEmail($email) {
  $fp = fopen('users.json', 'r');
  while ($line = fgets($fp)) {
    if (!empty($line)) {
      $line = json_decode($line, true);
      if ($line['email'] == $email)) {
        return $line;
      }
    }
  }
  return false;
  }
}
 ?>
