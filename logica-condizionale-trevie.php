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
<p>Logica condizionale</p>
<!--verificate sempre l'attributo action in quanto è
in quel file che le informazioni vengono inviate-->
<form action="logica-condizionale-trevie.php" method="POST">
<label>Variabile intteruttore</label></br>
<select name="lucesemaforo"> 
  <option value="verde">verde</option>
  <option value="giallo">giallo</option>
  <option value="rosso">rosso</option>  
</select>
<br><br>
<input type="submit">
</form>
<!--script in php -->
<?php

function semaforo() {
//alla variabile input assegniamo il valore del campo eta
//inserito nell'attributo name="eta" del form  
 $input = $_POST['lucesemaforo']; 
//condizione 1 
   if ($input == "verde") {
    $luceverde = "Luce Verde";
    $verde = "<style>body {background-color:green}<style>"; 
    
    return $luceverde.$verde; 

   }  
//condizione 2
   else if ($input == "rosso") {    
      $lucerossa = "Luce Rossa";
      $rossa = "<style>body {background-color:red}<style>";
   return $lucerossa.$rossa; 
   
   }
   //condizione 3 o tutte le restanti
   else {
        $lucegialla = "Luce Gialla";
         $gialla = "<style>body {background-color:yellow}<style>";
   return $lucegialla.$gialla; 

      }

}
//richiamo la funzione maggiorenne
echo semaforo();

?>

</body>
</html>
