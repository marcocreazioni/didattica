<?php
/*connessine al database */
include "connect.php";


/* inserimento da codice all'interno della tabella magazzino */
/*l'utente inserisce i dati in tabella */
?>
<form action="inserimentodatitabella.php" method="POST">
    
    <label>Merce</label><br>
        <input type="text" name="merce"></br>
    <label>Posto Magazzino</label><br>
        <input type="text" name="postomagazzino"><br><br>
    <!--pulsante di invio dati -->
    <input type="submit" value="invio dati">    

<?php
//catturiamo i dati dal form
$mercemagazzino = $_POST["merce"];
$postomagazzino = $_POST["postomagazzino"];


/* INSERT INTO "NOME TABELLA" ("campi della tabella) VALUES ("valori dei campi")*/
$insertdata = "INSERT INTO MAGAZZINO (MAGID,MERCE,POSTOMAGAZZINO) VALUES (' ','$mercemagazzino','$postomagazzino')";


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
