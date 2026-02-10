?php 
/*connessine al database */
$servername = "localhost";
$username = "root";
$password = "";
$database = "archivio";




// Crea la connessione $servername, $username; $passord ; $database (se c'è gia o è gia stato creato)
$connessione = mysqli_connect($servername, $username, $password, $database);
// Verrifica la connessio
if (!$connessione) {
  die("Connessione al database: " . mysqli_connect_error());
}

echo "<form action='updatetable.php' method='post'>
<label>Aggiorna Cognome</label><br>
<input type='text' name='aggiornacognome'><br><br>
<input type='submit'>
</form>";

$campocognome = $_POST["aggiornacognome"];

$aggiorna = " UPDATE clienti SET COGNOME='$campocognome' WHERE ID=2 ";


if (mysqli_query($connessione, $aggiorna)) {
  echo "Record Aggiornato correttamente <a href='datiarchivio.php'>controlla ora</a>";
} else {
  echo "Error updating record: " . mysqli_error($connessione);
}
