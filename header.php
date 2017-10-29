<?php
include_once("support.php");
require_once("classes/user.php");
include_once("header.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" src="/css/styles.css">
       <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Playfair+Display:i" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>EBDOS</title>
    <script src="js/functions.js"></script>
    <style media="screen">
    .hidden{
      display: none;
    }
    </style>
  </head>
  <body>
    <header class="mainHeader">
       <a class="title" href="index.php">El Baul Dorado</a>
     </header>
   <nav class="mainNav navbar navbar-default">
     <div class="container-fluid">
       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
     </div>
       <div class="collapse navbar-collapse" id="myNavbar" roll="navigation">
         <ul class="nav navbar-nav">
           <li><a href="#">Mujeres</a></li>
           <li><a href="#">Hombres</a></li>
           <li><a href="#">Conocenos</a></li>
           <li><a href="faq.php">FAQ's</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
            <?php if ($auth->isLogIn()){?>
                <li>
                    <a href="myProfile.php"><?php echo $_SESSION['email']; ?></a>
                </li>
                <li>
                  <a href="logout.php">Deslogear</a>
                </li>
            <?php } else{ ?>
                <li>
                    <a href="register.php">Register</a>
                </li>
                <li>
                  <a href="login.php">Login</a>
                </li>
            <?php } ?>
         </ul>
         </div>
         </nav>
<?php var_dump($auth->isLogIn());
?>
