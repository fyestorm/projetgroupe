<?php
require_once ('include/parse_csv.php');
// $slide = parsecsv('slide');// on appel dans la fonction le nom du fichier csv à appeler
// echo $slide[1]["nom"].'<br>';
// $techno = parsecsv('techno');// on appel dans la fonction le nom du fichier csv à appeler
// echo $techno[1]["techno"].'<br>';
 $equipe = json_decode(parsecsv('equipe'));// on appel dans la fonction le nom du fichier csv à appeler


echo $equipe[0]->nom;
echo $equipe[0]->competence;
?>