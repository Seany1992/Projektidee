<form id=registrierung action=Formulare/form_eval_login.php method=post>
	<fieldset> 
		<legend>Bitte geben Sie Ihre persönlichen Daten zur Registrierung  ein:</legend> 			
			<!-- Info: Die vom Nutzer eingegebenen Daten werden an ein Programm geschickt, dass prüft, ob der Nutzername vorhanden ist, und ob das Passwort dazu passt.-->
			<label for=username>Nutzername:</label>
			<input type=text name=username id=username required>
			<br>
					
			<label for=password>Passwort:</label>
			<input type=password name=password id=password required > 
			<br>
						
			<label for=email>E-Mail:</label>
			<input type=email name=email id=email required> 
			<br>
						
			<input type=submit name=submit>
			<br>
						
			<input form=registrierung type=reset>				
		</fieldset>
</form>