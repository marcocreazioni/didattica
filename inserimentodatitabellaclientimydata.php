<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydata";

// Crea la connessione $servername, $username; $passord ; $database (se c'è gia o è gia stato creato)
$connessione = mysqli_connect($servername, $username, $password, $database);
// Verrifica la connessio
if (!$connessione) {
  die("Connessione al database: " . mysqli_connect_error());
}

/* Inserimento dati in una tabella */


$Sqlinserimento = "INSERT INTO clienti (NOME, COGNOME, EMAIL, TELEFONO) VALUES (
                                                                                'Mario',
                                                                                'Rossi',
                                                                                'info@marcocreazioni.it',
                                                                                '+39 3209013280'
                                                                                 )";
                                                                                 

/* Gestione dell'errore */
if(mysqli_query($connessione, $Sqlinserimento)){
  echo "Informazione inserita con sucesso.";
} else{
  echo "ERROR: Could not able to execute $sqlinserimento. " . mysqli_error($connessione);
}

/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);

/*Inserimento dati in una tabella */

?> 
