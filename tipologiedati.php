<?php 
$string = "variabile stringa";
//funzione predefinita che ci dice che tipologia di dato e inserito in una variabile
//e la stampa anche sullo scherma e nel caso della string prova a dargli un valore
var_dump($string);

$numerointero = 5; 
var_dump($numerointero); //integer number int


$numeroconvirgola = 5.3; //5.3 è uguale a 5,3 floating number
var_dump($numeroconvirgola);

$verofalso = false; //boolean number (bool)vero o falso
var_dump($verofalso);


$exponent = 5e2;
var_dump($exponent); //un numero esponenziale e un float

$date = date("10/09/2026");//viene considera una stringa
var_dump($date);


?>