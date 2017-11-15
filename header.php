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
    <link rel="stylesheet" src="/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Playfair+Display:i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css\font-awesome-4.7.0\css\font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <title>EBDOS</title>
    <style media="screen">
    .hidden{
      display: none;
    }
    </style>
  </head>
    <body>
      <header class="mainHeader">
       <!-- a class="title" href="index.php">El Baul Dorado</a>-->
      </header>

      <nav class="navbar navbar-default no-margin">

        <div class="navbar-header fixed-brand">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
              <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>
            <a class="navbar-brand" href="#">El Baul Dorado</a>
        </div>

        <div>
          <ul class="nav navbar-nav navbar-right">
              <?php if ($auth->isLogIn()){?>
              <li>
                <a href="myProfile.php"><?php echo $_SESSION['userLoginOk']; ?></a>
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

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active" >
              <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>
            </li>
          </ul>
        </div>

        <div id="wrapper" class="toggled-2">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                  <?php if ($auth->isLogIn()){?>
                  <li class="hiddenOnLg">
                    <a href="myProfile.php"><?php echo $_SESSION['userLoginOk']; ?></a>
                  </li>
                  <li class="hiddenOnLg">
                    <a href="logout.php">Deslogear</a>
                  </li>
                    <?php } else{ ?>
                  <li class="hiddenOnLg">
                    <a href="register.php">Register</a>
                  </li>
                  <li class="hiddenOnLg">
                    <a href="login.php">Login</a>
                  </li>
                  <?php } ?>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Mujer</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Hombre</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Marcas</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Nuevo</a>
                    </li>
                    <li>
                        <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Indumentaria</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Zapatos</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>Accesorios</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Ofertas</a>
                    </li>
                </ul>
            </div>

        </div>
      <nav>
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="js/functions.js"></script>
       <script src="js/sidebar_menu.js"></script>

    </body>
  </html>
