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
<body onload="light()">
<p>Logica condizionale</p>
<!--verificate sempre l'attributo action in quanto è
in quel file che le informazioni vengono inviate-->
<form action="logica-condizionale.php" method="POST">
<label>Variabile intteruttore</label></br>
<select name="interruttore"> 
  <option value="on">on</option>
  <option value="off">off</option>  
</select>
<br><br>
<input type="submit">
</form>
<!--script in php -->
<?php

function maggiorenne() {
//alla variabile input assegniamo il valore del campo eta
//inserito nell'attributo name="eta" del form  
 $input = $_POST['interruttore']; 
//dobbiamo verificare che input sia maggiore di 18 anni
   //if deve verifcare input sia maggiore di 18 
   //{se si verifica deve succedere quello che viene scritto
   //nella parentesi graffa}
   if ($input == "on") {
    $luceaccesa = "Luce Accessa";
    $sfondo = "<style>body {background-color:yellow}<style>"; 
    
    return $luceaccesa.$sfondo; //SI E VERO 

   }  
   //se non si verifica quindi input ha un valore inferiore
   //a 18 deve succedere cio che indico in else {deve succedere
   //quello che scritto nella parentesi graffa dentro else}
   else {    
   $lucespenta = "Luce Spenta";
   return $lucespenta; //NO E FALSO
   
   }
}
//richiamo la funzione maggiorenne
echo maggiorenne();

?>

</body>
</html>
