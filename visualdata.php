<?php 
include "connect.php"
?>
<p>Visualizzazione dei dati tabella</p>


<?php 

$sqlvisual = "SELECT * FROM MAGAZZINO";
//a differenza delle altre operazioni associo la funzione query ad un variabile
if ($risultato = mysqli_query($connessione,$sqlvisual)) 
        {
 /*my sqli_num_rows crea la tabella dove inserire i dati con verifica dei risultati */                                               
           if (mysqli_num_rows($risultato)>0)
            {
            echo "<table style='border:1px solid'>" . "<tr style='border:1px solid'>" . "<th>MAGID</th>" . "<th>MERCE</th>" . "<th>POSTO MAGAZZINO</th>"."</tr>";
              /*mysqli_fetch_array recupera i dati della tabella e inserite all'interno di risultato dove i dati vengono inseriti in delle celle */
               while($row = mysqli_fetch_array($risultato))
               {
                  echo "<tr>";
                    echo "<td>" . $row['MAGID'] . "</td>"; 
                    echo "<td>" . $row['MERCE'] . "</td>";
                    echo "<td>" . $row['POSTOMAGAZZINO'] . "</td>"; 
                    echo "</tr>"; 
               }
               echo "</table>"; 
              // Inserisci tutti risultati mysqli_free_result($risultato) serve a mostrare tutti dati
              //  nel'elenco anche quelli con valori vuoti
                mysqli_free_result($risultato);
              
            }  
                else 
               { 
               echo "Mi spiace non ci sono righe.";
               };  
        }
        else 
        {
        echo "Non posso eseguire la query $visualdata" . mysqli_error($link);
         };

?>