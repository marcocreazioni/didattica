<?php

//prelievo le informazioni dal modulo verifcabonushtml
$redditoinserito = $_POST['reddito'];
$figliinseriti = $_POST['figli'];
$conviventiinseriti = $_POST['conviventi'];
$script = "<body onload='change()'>";
$function = "<script = 'async'>function change(){document.body.style.backgroundColor='orange';document.body.style.textAlign='center';}</script></body>";

   // per percepire il reddito deve avere almeno 1 figlio o (OR||) o un convivente
 if (($figliinseriti>0)||($conviventiinseriti>0)) {
        //se la prima condizione si è verifica occorre verificare l'appartenza a quella fascia di reddito
        //e devono verificarsi contemporaneamente due condizioni ovvero che il suo reddito sia
        //superiore a 8000 ma non superiore a 45000 
          if(($redditoinserito>=8000)&&($redditoinserito<=45000)){
             echo "$script <p>Grandeee hai diritto al bonus fiscale<p> $function";
          } else { 
            echo "<p>Sembra che per motivi reddituali non hai diritto al bonus</p>";
          }


  } else  {
            echo "<p>Mi spiace non hai diritto</p>"; 
  }





?>