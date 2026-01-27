<?php
//accesso ai dati della connessione
require ("connessione.php");


//variabile sql che permette di inserire valori e proprita my sql seguito del nome del database
$sql = "CREATE DATABASE Job";

 
if (mysqli_query($abilitaconnessione, $sql)) {
  echo "Database connesso e creato";
} else {
  echo "C'è un errore di connessionessione: " . mysqli_error($abilitaconnessione);
}







//chiusura della connessione
mysqli_close($abilitaconnessione);