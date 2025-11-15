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

/*cancellazione dati */
$delete = "DELETE FROM postaelettronica WHERE ind='3'";

//* attenzione in query si indica la variabile query che interviene nella modifica
if ($conn->query($delete) === TRUE) {
  echo "Cancellazzione avvenuta con successo";
} else {
  echo "Error deleting record: " . $conn->error;
}



$conn->close();
?>
