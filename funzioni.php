<?php
//sintassi funzioni senza parametri
function stampa(){
   //variabile con assegnazione
    $uno = "valore";
    //operazione da svolgere o quello che la funzione ritorna
    return $uno;


}

echo stampa();
//funzion con parametri dove andiamo ad indicare i parametri 
//nel nostro caso sommano due valori
function somma($a,$b) {
  $a;
  $b;
  return $a + $b;


}
//per prima cosa creaomo una funzione i cui valori saranno assegnati
//successivamento
function larghezzagonna($cf,$vestibilita){
   //circonferenza fianchi
    $cf;
   //vestibilita 
   $vestibilita;
   //valore costante indicato nelle formula per calcolare il rettangolo
   $valorecostante = 4;
   //a larghezza indichiamo l'espressione indicata nella formula
   $larghezza = $cf / $valorecostante + $vestibilita;  
//in return andiamo ad indicare il risultato della formula
   return $larghezza; 
}
//richiamo ed uso della funzione dove gli argomenti quindi i valori sono inviati da un form con $_POST["attributo name della casella di input"]
  echo "<p>La larghezza della gonna è " . larghezzagonna($_POST["circonferenza"],$_POST["vestibilita"]) . " cm</p>";
/*   
function gonnac() {
  $circonferenzafianche = $_POST["circonferenza"];
  $parametrodivestibilita = $_POST["vestibilita"];
  $larghezzagonna =   $circonferenzafianche / 4 + $parametrodivestibilita;

  print "<p>La larghezza della gonna è " . $larghezzagonna .  " cm</p>";  
  
}
*/
?>