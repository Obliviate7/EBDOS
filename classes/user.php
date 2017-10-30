<?php
  class User {
    private $id;
    private $usrName;
    private $usrSurname;
    private $birthDate;
    private $radioGenre;
    private $email;
    private $email2;
    private $pass;
    private $country;
    private $province;
    private $city;
    private $zipCode;
    private $mobile;
    private $address;
    private $webPage;
    private $bio;
    private $password;

    public function __construct(Array $data) {


      if (isset($data["email"])){
      $this->email = $data["email"];
      }


      if (isset( $data["pass"])){
        $this->pass = $data["pass"];
      }
      if (isset($data["usrName"])){
        $this->usrName = $data["usrName"];
      }
      if (isset($data["usrSurname"])){
        $this->usrSurname = $data["usrSurname"];
      }
      if (isset($data["birthDate"])){
        $this->birthDate = $data["birthDate"];
      }

      // $this->usrName = $data["usrName"];
      // $this->radioGenre =   $data["radioGenre"];
      // $this->country =      $data["country"];
      // $this->province =     $data["province"];
      // $this->city =         $data["city"];
      // $this->zipCode =      $data["zipCode"];
      // $this->mobile =       $data["mobile"];
      // $this->address =      $data["address"];
      // $this->webPage =      $data["webPage"];
      // $this->bio =          $data["bio"];
      if (isset($data["id"])) {
        $this->pass = $data["pass"];
        $this->id = $data["id"];
      } else {
        // pass sin hashear
        $this->pass = $data["pass"];
        // Pass hasheado
        // $this->pass = password_hash($data["pass"], PASSWORD_DEFAULT);
      }
    }
    public function saveImage() {
      // $imgName=$_FILES["avatar"]["name"];
      // $imgFile=$_FILES["avatar"]["tmp_name"];
      // $ext = pathinfo($imgName, PATHINFO_EXTENSION);
      // $myFile = "avatars/" . $this->getEmail() . "." . $ext;
      // move_uploaded_file($imgFile, $myFile);
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function getId() {
      return $this->id;
    }
    public function setUsrName($usrName) {
      $this->usrName = $usrName;
    }
    public function getUsrName() {
      return $this->usrName;
    }
    public function setUsrSurname($usrSurname) {
      $this->usrSurname = $usrSurname;
    }
    public function getUsrSurname() {
      return $this->usrSurname;
    }
    public function setEmail($email) {
      $this->email = $email;
    }
    public function getEmail() {
      return $this->email;
    }
    public function setPassword($pass) {
      $this->pass = $pass;
    }
    public function getPassword() {
      return $this->pass;
    }
    public function setBirthDate($birthDate) {
      $this->birthDate = $birthDate;
    }
    public function getBirthDate() {
      return $this->birthDate;
    }
    public function setRadioGenre($radioGenre) {
      $this->radioGenre = $radioGenre;
    }
    public function getRadioGenre() {
      return $this->radioGenre;
    }
    public function setEmail2($email2) {
      $this->email2 = $email2;
    }
    public function getEmail2() {
      return $this->email2;
    }
    public function setCountry($country) {
      $this->country = $country;
    }
    public function getCountry() {
      return $this->country;
    }
    public function setProvince($province) {
      $this->province = $province;
    }
    public function getProvince() {
      return $this->province;
    }
    public function setCity() {
      $this->city = $city;
    }
    public function getCity() {
      return $this->city;
    }
    public function setZipCode($zipCode) {
      $this->zipCode = $zipCode;
    }
    public function getZipCode() {
      return $this->zipCode;
    }
    public function setMobile($mobile) {
      $this->mobile = $mobile;
    }
    public function getMobile() {
      return $this->mobile;
    }
    public function setAddress($address) {
      $this->address = $address;
    }
    public function getAddress() {
      return $this->address;
    }
    public function setWebPage($webPage) {
      $this->webPage = $webPage;
    }
    public function getWebPage() {
      return $this->webPage;
    }
    public function setBio($bio) {
      $this->bio = $bio;
    }
    public function getBio() {
      return $this->bio;
    }
  }
?>
