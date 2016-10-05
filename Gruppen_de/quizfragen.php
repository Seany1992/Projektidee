<form id=registrierung action=Formulare/form_eval_quizfragen.php method=post>
				
	<legend>Quizfrageformulieren: </legend>
	 <br>
	<textarea rows=4 cols=50 name=frage><!-- Funktion: Hier wird der Admin eine neue Frage formulieren können --> </textarea>
	 <br>
	<label>Antworten formulieren: </label>
	 <br>
	<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
	 <br>
	<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
	 <br>
	<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
	 <br>
	<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
	 <br>
	 
	<label>
	 <input type=checkbox name="antwort[]" value=antwort1>
	 Antwort1
	</label>
	
	<label>
	 <input type=checkbox name="antwort[]" value=antwort2>
	 Antwort2
	</label>
	
	<label>
	 <input type=checkbox name="antwort[]" value=antwort3>
	 Antwort3
	</label>
	
	<label>
	 <input type=checkbox name="antwort[]" value=antwort4>
	 Antwort4
	</label>
	<!-- Info: Der Admin kann mit den Checkboxen bestimmen, welche der Antwortmöglichkeiten bezüglich der Fragestellung richtig sein soll. -->
	 <br>
	<input type=submit value=speichern>
</form>
	<a href=hub.php> <button type=button id=hauptmenue>Hauptmenü</button></a>	