<?php
//prelievo di variabili da form utente (usando una variabile super globale)
$testo1 = $_POST['nome'];
$testo2 = $_POST['cognome'];
$testo3 = $_POST['sito'];
//conversione delle tipologie di variabile 
//nella parentesi tonda indichiamo la tipologia per la conversione seguito dalla variabile da convertire
$testo3 = (int) $testo3;

//Prelievo e la conversione del campo serivzi
$testo4 = $_POST['servizi'];
$testo4 = (int) $testo4;

//Operazione da svolgere
$totale = $testo3 + $testo4;

echo $testo1 . " " . $testo2 . "</br>" .
 "<p>Il prezzo del sito web è:" . $testo3 ." €</p>". 
 "<p>Il totale incluse le opzioni è:" . $totale ." €</p>";
?>