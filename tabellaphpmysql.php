<?php
/*connessine al database */

$servername = "localhost";
$username = "root";
$password = "";
$database = "archivio27";

$connessione = mysqli_connect($servername, $username, $password, $database);
// Verrifica la connessione
if (!$connessione) {
  die("Connessione al database: " . mysqli_connect_error());
}

//creazione della tabella nel database
$sqlmagazzino = "CREATE TABLE magazzino (MAGID INT PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,
                                         MERCE VARCHAR(120) NOT NULL,
                                         POSTOMAGAZZINO VARCHAR(120) NOT NULL
                                         )";
/* Gestione degli errori */
if(mysqli_query($connessione,$sqlmagazzino)){
  echo "<p style='margin:10px;'>Tabella Creata con successo torna al modulo <a href='Calcolatoreiva.html'>qui</a></p>";
} else {
  echo "Non posso creare la tabella $sqlmagazzino " . mysqli_error($connessione);
}
/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);
?>
