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
<p>Segni di aria acqua terra</p>
<!--verificate sempre l'attributo action in quanto è
in quel file che le informazioni vengono inviate-->
<form action="logicapiuvie.php" method="POST">
<label>Variabile intteruttore</label></br>
<select name="elementi"> 
  <option value="acqua">Acqua</option>
  <option value="terra">Terre</option>
  <option value="aria">Aria</option>
  <option value="fuoco">Fuoco</option> 
</select>
<br><br>
<input type="submit">
</form>

<!--script in php -->
<?php

function segni(){
//assegno alla variabile tipologia il valore di "elementi" del form

$tipologia = $_POST['elementi'];
//verifico il contenuti di tipologia
switch ($tipologia) {
   //I condizione e valore di tipologia
      case "acqua":
         $cssuno="<body style='background-color:cyan'>";
         $testouno="<h1>Che il mare sia con te</h1>";
         $imgacqua="<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSxf_Q2O34K0oVT8qmf9f_LyB5ujAxHSmG1Q&s'>";
         //output della condizione acqua
         return $cssuno.$testouno.$imgacqua;    
      break; 
   //II condizione    
      case "terra":
        $cssdue="<body style='background-color:brown'>";
        $testodue="<h1>Sei forte come una roccia</h1>";
         //output della condizione terra
         return $cssdue.$testodue;
       break;
    //III condizione
      case "aria": 
         $csstre="<body style='background-color:lightblue'>";
         $testotre="<h1>Leggero come l'aria</h1>";
         //output della condizione terra
         return $csstre.$testotre;          

      break;
     //per tuttle condizioni rimanenti 
      default: 
           $cssquattro="<body style='background-color:orange'>";
           $testoquattro="<h1>Impavido come il fuoco</h1>";
          return $cssquattro.$testoquattro;
      }
      // fine delle condizioni

}
echo segni();

?>
</body>
</html>
