<?php
//accesso ai dati della connessione non solo al server ma anche al database job
require ("connessione.php");

//insert into = inserisci dentro + nome tabella(campi delle tabelle) VALUES + (valore per ogni 'campo')
$sql = "INSERT INTO Profili(ID,NOME,COGNOME,EMAIL,LAVORO_PRECEDENTE,TELEFONO) VALUES ('1',' MARIO', 'ROSSI','INFO@PROVA.IT','Libero professionista','0612334')";


if(mysqli_query($abilitaconnessione, $sql)) {
  echo "Dati inseriti con successo";
} else{
  echo "Non posso inserire dati $sql. " . mysqli_error($abilitaconnessione);
}

mysqli_close($abilitaconnessione);


?>
