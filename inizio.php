<html>
<head>
<style>
h1 {color:orange;
}
p {font-family:sans-serif;
}

    </style>
</head>
<body onload="titolo()">
<h1 id>Titolo</h1>

<?php
//questo è un commento in php
/* commento su piu righe
*/
echo "<p style='color:green'>IL mio paragrafo<p>";
?>

<script>
var attivo = false;

function titolo() {
    
   document.body.style.cursor = "url('mio-cursore.png') 64 64, auto";
  }



</script>
</body>
</html>
