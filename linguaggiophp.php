<?php
//input 
define("variabile","bugiardo");
//variabili superglobali 
$a = "interessante";
//variabili di classe
//process (function)
function calcolo(){
$b = ($_POST["numerouno"]);
$bconvertita = (integer) $b;
$c = 6;
return $bconvertita + $c;
}

//output
echo "<h1 style='text-align:center'>benvenuto mondo $a</h1>" . calcolo();
print "<h2 style='text-align:center'>Sono un sottotitolo</h2>" . constant("variabile");

?>