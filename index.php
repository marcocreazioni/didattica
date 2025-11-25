<?php

//TESTATA DEL SITO
include ("testata.php"); //non impedisce il caricamento di una pagina


//output con variabile php

//Sezione Header comune a tutte le pagine
$header = "<body><header><h1 id='uno'></h1></header>";
echo $header;
//Pubblicazione della testata del sito

//Corpo della pagina 
echo "<h1 style='text-align:center'>Ciao<h1>";

print "<p>il mio paragrafo</p>";

//FOOTER PIE DI PAGINA DEL SITO
require ("footer.php"); //impedisce il caricamento di una pagina (e una presenza obbligatoria)

?>