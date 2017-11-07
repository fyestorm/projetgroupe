      	<?php
require_once ('parse_csv.php');
$techno = json_decode(parsecsv('techno'));// on appel dans la fonction le nom du fichier csv à appeler
for ($i=0; $i < count(json_decode(parsecsv('slide'))); $i++) { 
//boucle sur le nb d'occurence l'argument de la fonction est le nom du fichier csv
if ($i == 0) {
  echo '<li data-target="#carouselExampleIndicators" data-slide-to='.$i.' class=\"active\"></li>';
}else{
echo '<li data-target=\"#carouselExampleIndicators\" data-slide-to='.$i.'></li>';
}
}


?>
      	<!DOCTYPE html>
      	<html>
      	<head>
      		<title></title>
      	</head>
      	<body>
      	<div class="container" style="height: 300px;">
          	 <div class="row">
          	  <div class="col-md-4">
               <article class="tete">
               	<h3>Langage</h3>
          	  	<article class="corps">
          	  		
          	  	</article>
               </article>          	  	
          	  </div>
                 <div class="col-md-4">
              <article class="tete">
           	   <h3>Frameworks</h3>
          	   <article class="corps">
          	  		
          	  	</article>
               </article>  	
          	  </div>
          	    <div class="col-md-4">
               <article class="tete">
               	<h3>Logiciels</h3>
          	  	<article class="corps">
          	  		
          	  	</article>
               </article>  	
          	  </div>          	 	           	
          	 </div>
          	</div> 
      	</body>
      	</html>
      	
       	
       <!--    </section1> Attention pas pris en compte dans le php-->