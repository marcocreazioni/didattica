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
else  {
    echo "il database è connesso e pronto per le operazioni<br>";
}

?>