<?php

require_once("db.php");

class Auth {

  public function __construct() {
    session_start();
  	if (!isset($_SESSION['email']) && isset($_COOKIE['email'])) {
  		$_SESSION['email'] = $_COOKIE['email'];
  	}
  }

  public function logIn($email) {
    $_SESSION['email'] = $email;
  }

  public function isLogIn() {
    return isset($_SESSION['email']);
  }

  public function userLogIn() {
    if ($this->isLogIn()) {
      $userLogIn = $_SESSION['email'];
      return $db->getByEmail($userLogIn);
    } else {
      return NULL;
    }
  }

  public function logOut() {
    session_destroy();
    setcookie('email', "", -1);
  }

  public function rememberMe($email) {
    setcookie('email', $email, time() + 3600 * 2);
  }  
}

 ?>
