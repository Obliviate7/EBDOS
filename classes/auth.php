<?php
  require_once("db.php");
  class Auth {
    public function __construct() {
      session_start();
      if (!isset($_SESSION['userLoginOk']) && isset($_COOKIE['userLoginOk'])) {
        $_SESSION['userLoginOk'] = $_COOKIE['userLoginOk'];
      }
    }
    public function logIn($email) {
      $_SESSION['userLoginOk'] = $email;
    }
    public function isLogIn() {
      return isset($_SESSION['userLoginOk']);
    }
    public function userLogIn() {
      if ($this->isLogIn()) {
        $userLogIn = $_SESSION['userLoginOk'];
        return $db->getByEmail($userLogIn);
      } else {
        return NULL;
      }
    }
    public function logOut() {
      session_destroy();
      setcookie('userLoginOk', "", -1);
    }
    public function rememberMe($email) {
      setcookie('userLoginOk', $email, time() + 3600 * 2);
    }
  }
?>
