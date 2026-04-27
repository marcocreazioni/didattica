<?php 
/*connessine al database */
include "connect.php";


/* visualizzazione dati */ 
$visualdata = "SELECT * FROM magazzino";
//a differenza di quando richiamiamo altre operazioni sul database
//
if ($risultato = mysqli_query($connessione,$visualdata)) {
               /*my sqli_num_rows crea la tabella dove inserire i dati con verifica dei risultati */                                               
           if (mysqli_num_rows($risultato)>0){

               echo "<table style='border:1px'>" . "<tr>". "<th>MAGID</th>" . "<th>MERCE</th>" . "<th>POSTOMAGAZZINO</th>" . "</tr>";
               /*mysqli_fetch_array recupera i dati della tabella e inserite all'interno di risultato dove i dati vengono inseriti in delle celle */
        while($row = mysqli_fetch_array($risultato)){
                echo "<tr>";
                    echo "<td>" . $row['MAGID'] . "</td>";
                    echo "<td>" . $row['MERCE'] . "</td>";
                    echo "<td>" . $row['POSTOMAGAZZINO'] . "</td>";
                echo "</tr>"; 
            }
               echo "</table>"; 
               // Inserisci tutti risultati mysqli_free_result($risultato) serve a mostrare tutti dati nell'elenco $i++
                mysqli_free_result($risultato);
              
           }
            else { 
               echo "Mi spiace non ci sono righe.";
            };  
  }
  else {
  echo "Non posso eseguire la query $visualdata" . mysqli_error($link);
};
/*Funzione visualizza totali */
/* echo $visualizzatot; */
/* Funzione che permette di terminare la connessione del database */
mysqli_close($connessione);







?>