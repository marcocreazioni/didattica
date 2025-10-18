<?php
//prelievo di variabili da form utente (usando una variabile super globale)
$testo1 = $_POST['nome'];
define("testo2",$_POST['cognome']);

function insert($cognome){
    $congnome = $_POST['cognome'];
    echo $cognome + "Rossi"
   

}

echo $testo1 . " " . testo2 . insert();
?>