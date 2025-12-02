<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "magazzino";

// Crea la connessione $servername, $username; $passord ; $database (se c'è gia o è gia stato creato)
$connessione = mysqli_connect($servername, $username, $password, $database);
// Verrifica la connessio
if (!$connessione) {
  die("Connessione al database: " . mysqli_connect_error());
}

/* Creazione della tabella "Clienti" con i campi (ID (tipologia di dato: "PRIMARY KEY" = Campo Primario "NOT NULL" = Non vuoto, "VAR CHAR" =
Stringa di caratteri con valore (numero di caratteri), INT = Valori a numeri interi esempi 1 2 3, FLOAT = Numeri interi e con la virgola 1.0 1.1 1.3) 
AUT_INCREMENT = Ogni campo compilato assume un numero progressivo UNIQUE = Campo privo di doppiani*/

$sqlarchivio = "CREATE TABLE materiali(CHIAVE INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
                                       PRIMARI VARCHAR(30) NOT NULL,
                                       DERIVATI VARCHAR(30) NOT NULL,
                                       LOGISTICA  VARCHAR(30) NOT NULL UNIQUE
                                        )"; 

/* Gestione degli errori */
if(mysqli_query($connessione, $sqlarchivio)){
  echo "Tabella Creata con successo";
} else{
  echo "Non posso creare la tabella $sqlarchivio. " . mysqli_error($connessione);
}

/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);

?>