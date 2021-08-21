<?php
	$jmeno = htmlspecialchars($_POST["Name"]);
	$sluzba = htmlspecialchars($_POST["Service"]);
	$kontakt = htmlspecialchars($_POST["Contact"]);

	$send = "<br><strong>Z webu DextraLine přišla zpráva od ".$jmeno."</strong>  
			<br><br>Zájem o službu: ".$sluzba."
			<br><br>Uživatelem zadaný kontaktní údaj: ".$kontakt." .
			<br><br><br>E-mail je automaticky generovaný na základě vyplněného kontaktního formuláře.<br><br><br>";

	$toEmail = "mawwet.mawwet@gmail.com";
	$headers  = 'MIME-Version: 1.0' . "\r\n";   
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
	$headers .= 'To: <'.$toEmail.'>' . "\r\n"; 
	$headers .= 'From:  <'.$kontakt.'>' . "\r\n";
	$predmet = 'Zpráva od '.$jmeno.' z kontaktního formuláře služby - '.$sluzba.'';

	mail($toEmail, $predmet, $send, $headers);
?>


