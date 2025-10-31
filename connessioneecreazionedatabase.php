<?php
$servername = "localhost";
$username = "root";
$password = "";

$connessione = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE mydata"; 

if (mysqli_query($connessione, $sql)) {
  echo "Database connesso e creato mydata";
} else {
  echo "C'è un errore di connessionessione: " . mysqli_error($connessione);
}



?>



