<?php 
include "connect.php";
include "css.php";

?>
<p>Filtri e ricerca</p>
<form action="ricercafiltri.php" method="POST">

<label>Filtra</label>
<select name="colonne">
<option value="MAGID">MAGID</option>
<option value="MERCE">MERCE</option>
<option value="POSTOMAGAZZINO">POSTOMAGAZZINO</option>
<option value="*">VISUALIZZA TUTTO</option>
</select><br><br>

</label>Inserisci</label><br>
<input type="text" name="test"><br><br>
<input type="submit" value="visualizza">
</form>

<?php
//cattura input
$sceltacolonne = $_POST['colonne'];
/* visualizzazione dati SELECT + * astrisco(mostra tutti i campi e record SELECT + DISTINCT esclude le ripetizione*/ 
$visualdata = "SELECT $sceltacolonne FROM magazzino";
//a differenza di quando richiamiamo altre operazioni sul database

if ($risultato = mysqli_query($connessione,$visualdata)) {
               /*my sqli_num_rows crea la tabella dove inserire i dati con verifica dei risultati */                                               
           if (mysqli_num_rows($risultato)>0){

               echo "<table style='border:1px'>" . "<tr>" . "<th>MAGID</th>" . "<th>MERCE</th>" . "<th>POSTOMAGAZZINO</th>"  . "</tr>";
               /*mysqli_fetch_array recupera i dati della tabella e inserite all'interno di risultato dove i dati vengono inseriti in delle celle */
        while($row = mysqli_fetch_array($risultato)){
              
        if ($sceltacolonne=='MAGID') { 
                echo "<tr>";
                echo "<td>" . $row['MAGID'] . "</td>"; 
                echo "<td>" ." " . "</td>";
                echo "<td>" . " " . "</td>"; 
                echo "</tr>";  }
               else if ($sceltacolonne=='MERCE') {
                 echo "<tr>";
                 echo "<td>" . " ". "</td>";
                 echo "<td>" . $row['MERCE'] . "</td>";
                 echo "<td>" . " " . "</td>";
                 echo "</tr>"; 
                }
                else if ($sceltacolonne=='*') {
                 echo "<tr>";
                 echo "<td>" . $row['MAGID'] . "</td>";
                 echo "<td>" . $row['MERCE'] . "</td>";
                 echo "<td>" . $row['POSTOMAGAZZINO'] . "</td>";
                 echo "</tr>"; 
                }
                else {
                 echo "<tr>";   
                 echo "<td>" . " " . "</td>"; 
                 echo "<td>" . " " . "</td>"; 
                 echo "<td>" . $row['POSTOMAGAZZINO'] . "</td>";
                 echo "</tr>";
                 }
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
?>


