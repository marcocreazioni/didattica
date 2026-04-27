<?php
/*connessine al database */
include "connect.php";


/* inserimento da codice all'interno della tabella magazzino */
/* INSERT INTO "NOME TABELLA" ("campi della tabella) VALUES ("valori dei campi")*/
$insertdata = "INSERT INTO MAGAZZINO (MAGID,MERCE,POSTOMAGAZZINO) VALUES (' ','Scarpe','Scafale A2')";


/* Gestione dell'errore */
if(mysqli_query($connessione, $insertdata)){
  echo "Informazione inserita con sucesso.";
} else{
  echo "ERROR: Non riesco ad inserire le informazioni di $insertdata. " . mysqli_error($connessione);
}

/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);

/*Inserimento dati in una tabella */

?>                                  
