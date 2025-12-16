<?php

//phpversion è una funzione predefinita definita da chi ha creato il linguaggio 
$a = phpversion();
//Per svolgere il passo successivo e stato neccessario convertire php version da una stringa ad un numero
$a = (float) $a;
// inseriemo una logica condizionale dove se la versione del php è superiore alla 6 il programma potra
//funzionare altrimenti non funzionera 
// if (condizione da verificare(gli operatori sono gli stessi di js)) {operazione da svolgere}
if ($a > 6) { 
 echo "Il programma puo funzionare correttamente perchè superiore alla versione 6.0<br>la versione installata è la $a";

}
//else {operazioni da svolgere se la condizione non viene soddisfatta}
else {
 echo "Il programma non puo funzionare perchè inferiore alla versione 6 ti prego di aggiornarla";

}


// echo var_dump($a);


?>