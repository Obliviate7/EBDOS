<?php
  require_once("user.php");
  require_once("db.php");
  class dbJSON extends db {
    private $file;
    public function saveUser(User $email) {
      $fp = fopen("users.json", "a+");
      $result = fwrite($fp, $email . PHP_EOL);
      return $result;
    }
    public function getAll() {
      $fp = fopen('users.json', 'r');
      $allDbJSON = json_decode(fgets($fp), true);
      return $allDbJSON;
    }
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
