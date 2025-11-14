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

/* visualizzazione e cancellazione dati 

/___________________VIUSALIZZA______________________________________________________________/
 // $visualizzadati = "SELECT ID , NOME, COGNOME, EMAIL, TELEFONO FROM clienti ORDER BY NOME ASC";
 // Selezionare dei campi con dei filtri dove con WHERE scegliamo la colonna da mostrare e con LIKE cerchiamo le informazioni nel dattaglio
 //  nell'esempio abbiamo selezione e filtrato tutti i nomi che iniziano con M 
  $visualizzadati = "SELECT ID , NOME, COGNOME, EMAIL, TELEFONO FROM clienti WHERE NOME LIKE 'M%'";
 

// con la funzione mysqli_query(con 2 argomenti, il primo e la variabbile connessione e il secondo argomento era la query) 
 if ($risultato = mysqli_query($connessione,$visualizzadati)) {
//my sqli_num_rows crea la tabella dove inserire i dati con verifica dei risultati                                               
           if (mysqli_num_rows($risultato)>0){

               echo "<table style='border:1px'>" . "<tr>". "<th>ID</th>" . "<th>Nome</th>" . "<th>Cognome</th>" . "<th>Email</th>" . "<th>Telefono</th>" . "<tr>";
               /* ysqli_fetch_array recupera i dati della tabella e inserite all'interno di risultato dove i dati vengono inseriti in delle celle 
        while($row = mysqli_fetch_array($risultato)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['NOME'] . "</td>";
                    echo "<td>" . $row['COGNOME'] . "</td>";
                    echo "<td>" . $row['EMAIL'] . "</td>";
                    echo "<td>" . $row['TELEFONO'] . "</td>";
                echo "</tr>"; 
            }
               echo "</table>"; 
 //            Inserisci tutti risultati mysqli_free_result($risultato) serve a mostrare tutti dati nell'elenco
                mysqli_free_result($risultato) . header('Location: nuova-pagina.html');
              
           }
            else { 
               echo "Mi spiace non ci sono righe.";
            };  
  }
  else {
  echo "Non posso eseguire la query $visualizzadati" . mysqli_error($link);
};
/_____________fine_visualizzazione_________________//
/_____________cancella_dati___________________//


$cancella = $_POST['id'];

$update = "DELETE FROM clienti SET COGNOME='$aggiornamenti_cognome' WHERE id='$cancella'";


*/
$delete = "DELETE FROM clienti WHERE id='3'"; 
//* attenzione in query si indica la variabile query che interviene nella modifica
if ($connessione->query($delete) === TRUE) {
  echo "Cancellazzione avvenuta con successo";
} else {
  echo "Error deleting record: " . $connessione->error;
}

$conn->close();
?>
