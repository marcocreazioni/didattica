<?php
//inseriamo le variabili dinmaiche della testata
$titolo_home = "<title>Home Page | Mio sito web</title>";
$meta_description = "<meta name='description' content='Webdeveloper'>";

echo "<html>
      <head>
      $titolo_home 
      $meta_description";
//Innesto di file dentro ad un altro file grazie a funzioni predefinite 
//require(argomenti) obbliga la pagina a cercare quel file e ad eseguire le istruzioni contenuto
//in mancanza del file richiesto il caricamento della pagina si interrompera 
//require_once(argomenti) il file da eseguire verra caricato solo 1 volta e in mancanza
//l'intera pagina non verra caricata 
//include(argomenti) il file viene incluso ed eseguito ma la mancanza del file 
//non interrompe il caricamento della pagina | attenzione l'argomento accetato da include
//prevede l'inserimento del percorso e del nome del file che si intende allegare
include ('testata.php');
echo "</head>";
?>

<br><div class='card' style='width: 100%;'>
  <img src='...' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>Card title</h5>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
  </div>
  <ul class='list-group list-group-flush'>
    <li class='list-group-item'>An item</li>
    <li class='list-group-item'>A second item</li>
    <li class='list-group-item'>A third item</li>
  </ul>
  <div class='card-body'>
    <a href='#' class='card-link'>Card link</a>
    <a href='#' class='card-link'>Another link</a>
  </div>
</div>

<?php
//corpo della home page dove assembliamo la testate il footer php

include ('footer.php');
echo "</body>
       <html>"
?>