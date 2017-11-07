<?php
require_once ('parse_csv.php');
$slide = json_decode(parsecsv('slide'));// on appel dans la fonction le nom du fichier csv à appeler
  // echo $slide[0]->nom;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Animated Vertical Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    </head>
<body>
  <div class="container-fluid">
  <div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<?php
     echo '<ol class="carousel-indicators">';
for ($i=0; $i < count(json_decode(parsecsv('slide'))); $i++) { 
//boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
if ($i == 0) {
  echo '<li data-target="#carouselExampleIndicators" data-slide-to='.$i.' class=\"active\"></li>';
}else{
echo '<li data-target=\"#carouselExampleIndicators\" data-slide-to='.$i.'></li>';
}
}
echo '  </ol>';
echo '  <div class="carousel-inner col-12">';
for ($i=0; $i < count(json_decode(parsecsv('slide'))); $i++) { 
//boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
if ($i == 0) {
echo '<div class="carousel-item active">';
echo '<img class="d-block w-100" src=../'.$slide[$i]->image.' alt="First slide">';
echo ' <div class="carousel-caption d-none d-md-block">';
 echo '<h3 class="text-light bg-dark">'.$slide[$i]->nom.'</h3>';
 echo '   <p class="text-light bg-dark">'.$slide[$i]->description.'</p>';
 echo ' </div>';
 echo '   </div>';
}else{
echo '<div class="carousel-item">';
echo '<img class="d-block w-100" src=../'.$slide[$i]->image.' alt="First slide">';
 echo '<div class="carousel-caption d-none d-md-block">';
 echo '<h3 class="text-light bg-dark">'.$slide[$i]->nom.'</h3>';
 echo '   <p class="text-light bg-dark">'.$slide[$i]->description.'</p>';
echo '  </div>';
echo '    </div>';
}
}
?>
</div>
    <!-- <div class="carousel-item active">
      <img class="d-block w-80" src="../img/slide/cacy.JPG" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h3>Test1</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque distinctio laudantium odit, nulla facere, tempora qui cum consequatur ullam excepturi amet a placeat aliquam ab error pariatur at corrupti dignissimos.</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="../img/slide/mastermind.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-80" src="../img/slide/cafe.JPG" alt="Third slide">
    </div>
  </div> -->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       <script src="../js/jquery-3.2.1.min.js" type="text/JavaScript"></script>
   <script src="../js/popper.min.js" type="text/JavaScript"></script>
<script src="../js/bootstrap.min.js" type="text/JavaScript"></script>
</body>
</html>
