<?php
include_once("support.php");
require_once("classes/user.php");
$mail = document.getElementById("email").value;
$verifMail = $db->getEmail($mail);
var_dump ($verifMail);

 ?>
