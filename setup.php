<?php
$servername = "localhost";
$username = "root";
$password = "";
//variabile con funzione di connessione al dabase e facoltativamente
$conn = mysqli_connect($servername, $username, $password);
// Verrifica la connessione
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*creazione del database */
$sql = "CREATE DATABASE Contatti";
if (mysqli_query($conn, $sql)) {
  echo "Il database è stato creato correttamente";
} else {
  echo "Errore di creazione del database: " . mysqli_error($conn);
}
/*chiusura della connessione al database */
mysqli_close($conn);

?>