<html>
    
<head>
<style>
table {border: 1px solid; 
       width:75%;
       border-collapse: collapse;


}
td, th {border:1px solid;
        text-align:center;
        width: 100px;

}

 </style>  

</head>
<body>
<p>Bonus Fiscale
    Hai diritto al bonus fiscale e al nuovo assegno familiare
</p>
<!--verificate sempre l'attributo action in quanto è
in quel file che le informazioni vengono inviate-->
<form action="operatoriavanzati.php" method="POST">
<label>Reddito</label></br>
<input type="text" name="insertreddito"><br><br>  
 <label>Figlio convivente</label><br>
 <input type="number" name="insertfiglio"><br><br>
<input type="submit" value="verifica ora">
</form>
<!--script in php -->
<?php
// l'utente ha diritto al bonus se ha un reddito
//inferiore a 10.000€ e almeno 1 figlio convivente
//--------------STEP A ------------
//catturo il valore delle varibili del modulo
$reddito = $_POST["insertreddito"];
$figli = $_POST["insertfiglio"];
//-------------STEP B-----------------------
function verificabonus(){
     if (($GLOBALS["reddito"]<=10000) && ($GLOBALS["figli"]>0)) {
        return "Hai diritto al bonus fiscale";
     }
     else {
        return "Mi spiace non si sono verificate
        le condizioni per ottenere il bonus ficale";
     }      
}
//l'utente ha diritto all'assegno familiare se 
//o almeno un reddito inferiore ai 10000€ o un figlio
//convivente
function dirittoassegno(){
      if (($GLOBALS["reddito"]<=10000) || ($GLOBALS["figli"]>0)) {
          return "Hai diritto all'assegno familiare";

      }
      else {
         return "Mi spiace non si sono verificate nessuna
         delle condizioni per ricevere l'assegno";
      }

}
// L'utente ha diritto ad un mini bonus se ha un reddito uguale a 30000€
//  e non deve avere figli
function minibonus(){
    if (($GLOBALS["reddito"]!=30000) != ($GLOBALS["figli"]==0)) {
         return "Non hai diritto al mini bonus";  
    }
    else {
         return "Hai diritto al mini bonus";
    }

} 

//-------------------STEP C-------------
//stampa del risultato della verifica
echo verificabonus()."<br>";
echo dirittoassegno()."<br>";
echo minibonus();
    

?>
</body>
</html>
