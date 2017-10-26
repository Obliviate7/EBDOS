<?php
require_once("user.php");
require_once("db.php");

class dbMySQL extends db {
  private $conn;

//configura la conexion con la bd
  public function __construct() {
    //configurar con el host, el nombre de la base, y el puerto
    $dsnDb = 'mysql:host=localhost;dbname=el_baul_dorado;
    charset=utf8mb4;port=3306';
    //configurar con el nombre de usuario de la bd
    $userDb ="root";
    //configurar con la contraseña del usuario de la bd
    $passDb = "Liliana01";

//crea la conexion con la bd, si no se conecta indica error
    try {
      $this->conn = new PDO($dsnDb, $userDb, $passDb);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }
  }


  public function saveUser(User $usuario) {
      $query = $this->conn->prepare("INSERT INTO users (usrName, usrSurname, email, pass) VALUES (:usrname, :usrsurname, :email, :pass)");
      $query->bindValue(":usrname", $usuario->getUsrName());
      $query->bindValue(":usrsurname", $usuario->getUsrSurname());
      $query->bindValue(":email", $usuario->getEmail());
      $query->bindValue(":pass", $usuario->getPassword());
      $query->execute();
}

  public function getAll() {
      $query = $this->conn->prepare("SELECT * FROM users");
      $query->execute();
      $all = $query->fetchAll();
      var_dump($all);
  }

  public function getByEmail($usuario) {
      $query = $this->conn->prepare("SELECT email, pass FROM users WHERE :email = $usuario");
      $query->execute();
      $array = $query->fetch();
      if ($array != NULL) {
        return new User($array);
      }
      else {
        return NULL;
      }
  }

}
  ?>
