<?php 
include "connect.php";

//variabile di inserimento dati
$sqlinsert = "INSERT INTO MAGAZZINO (MAGID,MERCE,POSTOMAGAZZINO) VALUE (' ','Tavolo da ping pong','BSS')";


/* esegue la query */
if(mysqli_query($connessione, $sqlinsert)){
  echo "Informazione inserita con sucesso.";
} else{
  echo "ERROR: Non riesco ad inserire le informazioni di $sqlinsert. " . mysqli_error($connessione);
}


/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);



?>
