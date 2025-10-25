<?php
$title = ["Home","Servizi","Contatti"];
$descrizione = ["Il mio primo sito web in php",
                "Sevizi offerti",
                "contattami ora", 
                                    ];

echo "<html><head><title>$title[0]</title><meta name='description'content='$descrizione[0]'>";
//importazione di un css esterno
$importcss = "<link rel='stylesheet' href='test.css' type='text/css' >";
//css in pagina come variabili
$background = "body {background-color:lightgray}";

echo "<style>$background</style>$importcss</head><body>";
//include incorpora mentre require esegue il file interessato
include 'testata-sito.php';
echo "<main><p>IL mio paragrafo meraviglioso</p></main>";
include 'footer-sito.php';
echo "</body></html>";

?>