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

/* Inserimento dati un modulohtml*/

/*VARIABILI DEL MODULO */
$inserimentonome = $_POST['nome'];
$inserimentocognome = $_POST['cognome'];
$inserimentoemail = $_POST['email'];
$inserimentotelefono = $_POST['telefono'];

$inserimentoutentionline = "INSERT INTO clienti (NOME,COGNOME,EMAIL,TELEFONO) VALUES ('$inserimentonome',
                                                                                      '$inserimentocognome',
                                                                                      '$inserimentoemail',
                                                                                      '$inserimentotelefono'
                                                                                      )";


/* Gestione dell'errore */
if(mysqli_query($connessione, $inserimentoutentionline)){
  echo "Informazione inserita con sucesso.";
} else{
  echo "No che diamine ho generato un errore $inserimentoutentionline. " . mysqli_error($connessione);
}


/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);

/*Inserimento dati in una tabella */

?> 
