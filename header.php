<?php
  include_once("support.php");
  require_once("classes/user.php");
  include_once("header.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Playfair+Display:i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css\font-awesome-4.7.0\css\font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>EBDOS</title>
    <style media="screen">
    .hidden{
      display: none;
    }
    </style>
  </head>
    <body>
      <header class="mainHeader">
       <a class="title" href="index.php">Baul Dorado</a>
      </header>
      <nav class="mainNav navbar navbar-default">
     <div class="container-fluid">
       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <div class="collapse navbar-collapse" id="myNavbar" roll="navigation">
         <ul class="nav navbar-nav">
           <li><a href="#">MUJERES</a></li>
           <li><a href="#">HOMBRES</a></li>
           <li><a href="#">MARCAS</a></li>
           <li><a href="faq.php">FAQ'S</a></li>
         </ul>
           <ul class="nav navbar-nav navbar-right">
               <?php if ($auth->isLogIn()){?>
               <li>
                 <a  href="myProfile.php"><span class="logButtons glyphicon glyphicon-pencil"> <?php echo $_SESSION['userLoginOk']; ?></a>
               </li>
               <li>
                 <a  href="logout.php"><span class="logButtons glyphicon glyphicon-user"> CERRAR SESION</a>
               </li>
                 <?php } else { ?>
               <li>
                 <a href="register.php"><span class="logButtons  glyphicon glyphicon-user"> REGISTRATE</a>
               </li>
               <li>
                 <a href="login.php"><span class="logButtons glyphicon glyphicon-log-in"> INGRESA</a>
               </li>
               <?php } ?>
               <li>
                 <a href="#" class="layout" onclick="changeLayout()">LAYOUT</a>
                 <!-- <button type="button" class="btn btn-default" onclick="changeLayout()" name="button">TH</button> -->
               </li>
            </ul>
       </div>
     </div>
   </nav>
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="js/functions.js"></script>
       <script src="js/sidebar_menu.js"></script>

    </body>
  </html>
