<?php
//variabile di input form
$page = '<form action="ipotesiswitch.php" method="post"><label>Campo Test</label><br>
<input type="text" name="test"><br><br><input type="submit"> <form>';
$test = $_POST["test"];
//ipotesi test lasciato vuoto
if ($test == ""){ 
    echo "<p style='position:relative;top:200px'>non hai inserito un valore del campo</p>";
     } 
//altrimenti verifica le diverese condizioni
else {
    
    switch ($test) {
  //ipotesi 1
    case "casa":
    echo "<p style='position:relative;top:200px'>perfetto sei il benvenuto!</p>";
    break;
  //ipotesi 2 
    case "bo":
    echo "<p style='position:relative;top:200px'>Non ci ho capito nulla</p>";
    break;
 //tutte le altre ipotesi   
    default:
    echo "<p style='position:relative;top:200px'>perfetto ti dico cosa hai scritto $test</p>";
    }    

 //  echo "<p style='position:relative;top:200px'>procedo con il calcolo $test</p>";

}
//stampa del form
print $page;

?>
