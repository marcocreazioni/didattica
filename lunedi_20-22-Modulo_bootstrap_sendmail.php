<?php
		
if($_POST['nome'] != '' && $_POST['cognome'] != '' && $_POST['email'] != '' && $_POST['telefono'] != ''  && $_POST['indirizzo1'] != '' && $_POST['indirizzo2'] != ''  && $_POST['citta'] != '' && $_POST['paese'] != '' && $_POST['cap'] != '' && $_POST['oggetto'] != '' && $_POST['messaggio'] != '' && $_POST['privacy'] != '') {
		

		

		
	$headers  = 'MIME-Version: 1.0' . "\r\n";
		
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		

		
	$headers .= 'From: ' . $_POST['nome'] . $_POST['cognome'] . $_POST['indirizzo'] . $_POST['telefono']. $_POST['indirizzo1'] . $_POST['indirizzo2'] . $_POST['citta'] . $_POST['paese'] .  $_POST['cap'] . '<' . $_POST['email'] .'>'. $_POST['privacy'] . "\r\n" .
		
    'Rispondi a: ' . $_POST['email'] . "\r\n" .
		
    'X-Mailer: PHP/' . phpversion();
		

		
	$subject = 'Nuova mail dal sito ' . $_POST['oggetto'] ;
		
	$message = '<b>Name:</b> '.$_POST['nome'].'<br>
    
    <b>Cognome:</b> ' .$POST['cognome'].'<br>
    
    <b>Telefono:</b>' .$POST['telefono'].'<br>
    
    <b>Paese: </b>' .$POST['paese'].'<br>
    
    <b>Cap: </b>' .$POST['cap'].'<br>
		
	<b>Email:</b> '.$_POST['email'].'<br>
		
    <b>Oggetto:</b> '.$_POST['oggetto'].'<br>
		
	<b>Messaggio:</b> '.$_POST['messaggio'];
		

		
	mail( "info@indirizzosito.it", $subject, $message, $headers ); //  Replace with your email 
		

		
	echo '<div class="alert alert-success alert-dismissable">
		
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		
			Il tuo messaggio è stato inviato, grazie per averci contattato
		
		</div>';
		

		
}else{
		

		
	echo '<div class="alert alert-danger alert-dismissable">
		
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		
			<b>Ci sono dei campi da compilare!</b>
		
		</div>';
		
}
