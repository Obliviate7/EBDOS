<?php
  require_once("user.php");
  abstract class db {
    public abstract function saveUser(User $email);
    public abstract function getAll(); 
    public abstract function getByEmail($email);
    public abstract function modifyUser(User $email);
  }
?>
