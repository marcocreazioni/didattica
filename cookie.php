<?php
$set = $_SERVER['REMOTE_ADDR'];
/*remote adress preleva l'inidirizzo ip del server */
$indirizzomail = $_POST['email'];
/* con $_POST con una variabile associate prendiamo dei valori da un modulo compilato da un utente su una pagina del sito */

/* con la funzione predefinita setcookie possiamo genererare un file cookie 
con le seguenti variabili da inserire all'interno della funzione (nome del cookie, valore associato al
cookie, scadenza o permanenza del cookie, cartella dove si intende salvare il cookie* facoltativo "", dominio "localhost", facoltativamente il valore di protocollo https o http)
*/
setcookie("IP", $set , time()+30*24*60*60 , "", "localhost" );
setcookie("MAIL", $indirizzomail, time()+30*24*60*60 , "", "localhost");

echo $_COOKIE["IP"]."<br>";
echo $_COOKIE["MAIL"];
?>
