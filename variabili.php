<?php
$mario = "Amici";
$Mario = "benvenuti";
$Mario = Null;
$Mario = "WOW";
$miodoc = fopen("documento.txt", "w");
$operatore = 10;
$operatorebis = 20;
$casa = $operatore * $operatorebis;

echo ($operatore + $operatorebis) . "<br>";
echo ($casa);
define ('casa', "Ciao\nCiao" );
echo " <h1 align='center' style='color:green'>  Ciao  $mario  $Mario !!!  </h1> " . "<h2>" . casa . "</h2>" ;
var_dump($Mario);
echo $miodoc;

?>
