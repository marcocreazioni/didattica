<?php

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
/*Prelievo informazioni */
$fisso = $_POST['prezzofisso'];
$fisso = (int) $fisso;
/* associo una variabile ad un dato da prelevare nel form */
$servizi = $_POST['servizi'];
$servizi = (int) $servizi;
/* operaziooni con un variabile*/
$totale = $fisso + $servizi;


echo "<h1>" . $nome . " " . $cognome . "</h1>" . "<br>" . "La componente fissa è: " . $fisso . 
"€" . "<br>la parte variabile è: " . $servizi . "€" . "<br>". "il totale è: " . $totale . "€"  ;

?>