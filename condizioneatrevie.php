<html>
    <head>
        <title>Semaforo</title>
    <style>

    </style>
    <head>
<body>
    <h1>Condizioni con 3 output</h1>
<form action="condizioneatrevie.php" method="post">
<select name="semaforo">
<option value="rosso">Rosso</option>
<option value="verde">Verde</option>
<option value="arancione">Arancione</option>
<option value="giallo">Giallo</option>
</select><br><br>
<input type="submit" value="invia">
</form>

<?php
//cattura del valore di semaforo nel form
$set = $_POST["semaforo"];

function condizione() { 
//ciclo if(I condizione) else if(II condizione) else altre condizione
   if ($GLOBALS["set"]=="rosso") { 
      $stop = "con il rosso fermati";
          return $stop; 

   }

    else if ($GLOBALS["set"]=="verde") {
       $start = "con il verde vai";
           return $start;     
    }
    
    else {
       $warning = "fai attenzione prima di andare";
            return $warning;      
    }   

}

echo condizione();

?>




</body>
<html>
