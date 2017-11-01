<?php
  require_once("user.php");
  require_once("db.php");
  class dbJSON extends db {
    private $file;
    public function saveUser(User $usuario) {
      $pass = sha1($usuario->getPassword());
      $jsonUser = json_encode([
        'usrname'      => $usuario->getUsrName(),
        'usrsurname'   => $usuario->getUsrSurname(),
        'birthDate' => $usuario->getBirthDate(),
        'email'     => $usuario->getEmail(),
        'country' =>  $usuario->getCountry();
        'province' =>  $usuario->getProvince();
        'cit' =>  $usuario->getCity();
        'zipcode' =>  $usuario->getZipCode();
        'mobile' =>  $usuario->getMobile();
        'address' =>  $usuario->getAddress();
        'webpage' => $usuario->getWebPage();
        'bio' =>  $usuario->getBio();
        'password'  => $pass
      ]);
      if (writeUserFile($jsonUser)) {
        uploadPhoto($photo);
      }
      return $result;
    }

    public function writeUserFile($jsonUser2) {
      $fp = fopen("users.json", "a+");
      $result = fwrite($fp, $jsonUser2 . PHP_EOL);
      return $result;
    }

    public function uploadPhoto($photo){
      if (count($photo)) {
          $avatarFileName = $photo['name'];
          $avatarFile = $photo['tmp_name'];
          $avatarExtension = pathinfo($avatarFileName, PATHINFO_EXTENSION);
          $hash= sha1($user['username']);
          $result = move_uploaded_file($avatarFile, 'avatars/' . $hash . '.' . $avatarExtension);
          $arch= $hash.".".$avatarExtension;
           return $arch;
      }
      else {
        return "";
      }
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
      public function modifyUser(User $usuario){
        }
  }
?>
