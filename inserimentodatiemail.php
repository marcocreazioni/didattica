<?php
//connessione al database
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

//prelievo campi dal form inseriscidatabaseemail
/*VARIABILI DEL MODULO */
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$emaildue = $_POST['emaildue'];

//inserimento dati nella tabella postaellettornica (campi) value(valore da inserie nel campo nellao stesso ordine)
$insertdata = "INSERT INTO postaelettronica (NOME,COGNOME,EMAIL,EMAILDUE) VALUES ('$nome',
                                                                                      '$cognome',
                                                                                      '$email',
                                                                                      '$emaildue'
                                                                                      )";

/* Gestione dell'errore */
if(mysqli_query($conn, $insertdata)){
  echo "Informazione inserita con sucesso.";
} else{
  echo "No che diamine ho generato un errorre $insertdata. " . mysqli_error($conn);
}

