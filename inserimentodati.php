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

/* Inserimento dati in da modulo */
$matprimario = $_POST['primario'];
$matsecondario = $_POST['derivato'];
$matlogistica = $_POST['logistica'];




/* Inserimento dati in una tabella */


$Sqlinserimento = "INSERT INTO materiali (PRIMARI, DERIVATI, LOGISTICA) VALUES ('$matprimario','$matsecondario','$matlogistica')";

 if(mysqli_query($connessione, $Sqlinserimento)){
  echo "Informazione inserita con sucesso.";
} else{
  echo "ERROR: Could not able to execute $Sqlinserimento. " . mysqli_error($connessione);
}   


/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);

                                                                                 

