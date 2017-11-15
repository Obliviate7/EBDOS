<?php include("header.php")?>
<div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/perchero.jpg" alt="Perchero">
    </div>

    <div class="item">
      <img src="images/girlgrass.jpeg" alt="GirlGrass">
    </div>

    <div class="item">
      <img src="images/tableclothes.jpeg" alt="TableClothes">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="sr-only">Siguiente</span>
  </a>
  </div>
</div>
<?php include("footer.php"); ?>
