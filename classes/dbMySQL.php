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

  public function saveUser(User $email) {
//crear la funcion para guardar usuario
  }

  public function getAll() {
//crear la funcion para traer toda la base
  }

  public function getByEmail($email) {
//crear la funcion para traer los datos del usuario buscandolo por email
  }
}
  ?>
