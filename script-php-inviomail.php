<?php
/* Esempio di commento */
/* $_POST recupera il contenuto con il metodo post dal form html 
lo puoi fare solo se ['prende il name associato alla casella di input'] il contenuta della cella è diverso (!=) da una
stringa vuota '' (operatore and &&) significa che tutti valori del form devono essere
riempiti per aggiungere alla condizione altri dati dal modulo duplico la stringa a partire da
&& $_POST['M'] != '' sostituendo il valore tra gli apici con l'attributo del campo successivo*/ 
if($_POST['nome'] != '' && $_POST['cognome'] != '' && $_POST['telefono'] != '' && $_POST['mail'] != ''  && $_POST['nascita'] != '' && $_POST['codice'] != ''  && $_POST['servizio'] != ''  && $_POST['messaggio'] != '' && $_POST['interessare'] != ''  && $_POST['privacy'] != '' ) 
/* if (condizione che si deve verificare) e dopo la parentesi graffa si deve indicare
{l' operazione da svolgere se si verifica la condizione } else alla chiusuara della prima
graffa indica cosa deve succedere se la condizione non si verifica {operazione da svolgere
se la condizione di if(  ) non si dovesse verificare} */
{
	
	/* In questo script vengono generate (dichiarate) 3 variabili $header = (valore della variabile) (TESTATA DELLA MAIL)
       $subject = (valore delle variabile) (oggetto che comparire nella mail) e $messagge = 'corpo della mail') (MESSAGGIO DELLA MAIL) */
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    /* Mime è una codifica che permette la formattazione di testo della mail */
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    /* e al quale si aggiunge anche con il simbolo del punto che in php significa aggiungi (concatena piu voci)
    la tipologia di formattazione del contenuto della mail nell'esempio ricevero
    mail in html e l'insieme di tipologie di caratteri supportati "charset"
    aggiungiamo inoltre i campi inseriti nella (condizione) con la stessa stringa
    . $_POST['campo gia inserito in if'] */
	$headers .= 'From: ' . $_POST['nome'] . $_POST['cognome'] . $_POST['telefono']. $_POST['mail'] . $_POST['nascita'] . $_POST['codice'] . $_POST['servizio'] .  $_POST['messaggio'] . '<' . $_POST['mail'] .'>'. $_POST['interessare'] . $_POST['privacy'] . "\r\n" .
    'Reply-To: ' . $_POST['mail'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
     /* Con reply-to inseriamo la possibilita di risposta usando il campo inserito dall'utente
     con la sua mail e X-Mailer sta indicare il protocollo usato per l'invio verificando
     la versione nel nostro caso verifichera la presenza della versione 7 in poi */	

     $subject = 'Nuova mail dal sito ' . /* $_POST['oggetto'] */;
    /* subject indica la variabile dell'oggetto della mail */

    $message = '<b>Name:</b> '.$_POST['nome'].'<br><b>Cognome:</b>' .$_POST['cognome'] . ' 
	<br><b>Email:</b> '.$_POST['mail'].'<br>
    <b>telefono:</b> '.$_POST['telefono'].'<br>
	<b>Messaggio:</b> '.$_POST['messaggio'] .'<br> 
    <b>Servizio Scelto:</b>' . $_POST['servizio'] . '<br>
    <b>Nato il: </b>' .  $_POST['nascita'] . '<br>
    <b>Ha accettato la privacy</b>'. $_POST['privacy'];
	/* message indica la variabile con le informazioni contenute del messaggio
     '<b>Name:</b> ' è il contenuto stringa impostato da me e con il . vado ad
     aggiungere anche l'informazione del modulo che segue .$_POST['telefono'] come
     in questo esempio il ; sta ad indicare che non ho piu nulla da associare
     alla varibile*/
    /* mail è un richiamo invece e una FUNZIONE (nel nostro caso riprende
    una funzione PREIMPOSTATA) dentro la parentesi tonda si inseriscono
    gli argomenti necessari per poter attivare la funzione (invio della mail)
    l'argomento tra i doppi apici "indirizzo mail a cui deve essere inviata la mail" */

	mail( "info@indirizzosito.it", $subject, $message, $headers ); 
	
	echo '<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Il tuo messaggio è stato inviato
		</div>';
	
}else{
	/* in questo caso se la condizione non si verifica stampa (echo) a video il contenuto
    presente tra i songoli apici 'qui posso mettere scritto o addirittura inserire
    codice html come nel caso che segue ' */		
	echo '<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<b>Ci sono dei campi da compilare!</b>
		</div>';
}
/* PER POTER RENDERE EFFETTIVO L'INVIO DELLA MAIL DEVONO ESSERE CARICATI SU UN SERVER
OVE PRESENTE LE LIBRERI DI FUNZIONAMENTO DEL LINGUAGGIO PHP */
?>
