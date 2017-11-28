<?php
  require_once("user.php");
  require_once("db.php");

  class dbMySQL extends db {
    private $conn;
    public function __construct() {
      $dsnDb = 'mysql:host=localhost;
      dbname=el_baul_dorado;
      charset=utf8mb4;
      port=3306';
      $userDb ="root";
      $passDb = "root";
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
      $all = $query->rowCount();
      echo "$all";
    }
    public function getByEmail($usuario) {
      $query = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
      $query->bindValue(":email", $usuario);
      $query->execute();
      $array = $query->fetch();
      if ($array != NULL) {
        return new User($array);
      }
      else {
        return NULL;
      }
    }
    public function modifyUser(User $usuario){
      $userId = $usuario->getId();
      $query = $this->conn->prepare("UPDATE users SET usrName = :usrname,
        usrSurname = :usrsurname,
        pass = :pass,
        birthDate = :birthdate,
        country = :country,
        province = :province,
        city = :city,
        zipCode = :zipcode,
        mobile = :mobile,
        address = :address,
        webPage = :webpage,
        bio = :bio
        WHERE id = $userId");
      $query->bindValue(":usrname", $usuario->getUsrName());
      $query->bindValue(":usrsurname", $usuario->getUsrSurname());
      $query->bindValue(":pass", $usuario->getPassword());
      $query->bindValue(":birthdate", $usuario->getBirthDate());
      $query->bindValue(":country", $usuario->getCountry());
      $query->bindValue(":province", $usuario->getProvince());
      $query->bindValue(":city", $usuario->getCity());
      $query->bindValue(":zipcode", $usuario->getZipCode());
      $query->bindValue(":mobile", $usuario->getMobile());
      $query->bindValue(":address", $usuario->getAddress());
      $query->bindValue(":webpage", $usuario->getWebPage());
      $query->bindValue(":bio", $usuario->getBio());
      $query->execute();
    }
  }
?>
