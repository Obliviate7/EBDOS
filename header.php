<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

       <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Playfair+Display:i" rel="stylesheet">
       <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <!-- Optional theme -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" src="/css/master.css">

    <title>EBDOS</title>
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
           <?php /*if ($auth->isLogin()) : */?>
             <li>
               <a href="myProfile.php">MiEmail(cambiarInfoPerfil)</a>
             </li>
             <li>
               <a href="logOut.php">Deslogear</a>
             </li>
           <?php /*else:*/ ?>
             <li>
               <a href="register.php">Register</a>
             </li>
             <li>
               <a href="login.php">Login</a>
             </li>
           <?php/* endif;*/ ?>
         </ul>
         </div>
         </nav>

  </body>
</html>
