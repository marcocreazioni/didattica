<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contatti";

//variabile con funzione di connessione al dabase e facoltativamente
//a mysql connect aggiungiamo il database
$conn = mysqli_connect($servername, $username, $password, $database);
//verifica sei dati di connessione al database sono corretti e se sono effettivamente connesso
if (!$conn) {
  die("Connessione al database: " . mysqli_connect_error());
}


/*Creazione della tabella "Clienti" con i campi (ID (tipologia di dato: "PRIMARY KEY" = Campo Primario "NOT NULL" = Non vuoto, "VAR CHAR" =
Stringa di caratteri con valore (numero di caratteri), INT = Valori a numeri interi esempi 1 2 3, FLOAT = Numeri interi e con la virgola 1.0 1.1 1.3) 
AUT_INCREMENT = Ogni campo compilato assume un numero progressivo UNIQUE = Campo privo di doppiani*/

 $sqltabelle = "CREATE TABLE postaelettronica(IND INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
                                       NOME VARCHAR(30) NOT NULL,
                                       COGNOME VARCHAR(30) NOT NULL,
                                       EMAIL VARCHAR(60) NOT NULL UNIQUE,
                                       EMAILDUE  VARCHAR(30) NOT NULL UNIQUE
                                        )"; 

// Gestione degli errori 
if(mysqli_query($conn, $sqltabelle)){
  echo "Tabella Creata con successo";
} else {
  echo "Non posso creare la tabella $sqltabella. " . mysqli_error($conn);
}
