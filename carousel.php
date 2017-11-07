<?php
require_once ('include/parse_csv.php');
$nbSlide  = count(json_decode(parsecsv('equipe')));
// echo $nbSlide;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Animated Vertical Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-80" src="img/slide/cacy.JPG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="img/slide/mastermind.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="img/slide/cafe.JPG" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       <script src="js/jquery-3.2.1.min.js" type="text/JavaScript"></script>
   <script src="js/popper.min.js" type="text/JavaScript"></script>
<script src="js/bootstrap.min.js" type="text/JavaScript"></script>
</body>
</html>
