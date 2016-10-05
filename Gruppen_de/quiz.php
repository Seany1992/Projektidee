<p>Frage 1 von X</p> 
	<!--Funktion: Wird eine fortlaufende Nummerierung der Fragen z.b. "1"-->
		
<form action=form_eval_quiz.php method=POST>
	<fieldset>
		<legend>Quizfrage</legend> 
		<!-- Funktion: Momentan noch Platzhalter. Hier wird die Frage eingefügt -->
					
		<label for=antwort1> A: Antwort</label> 
		<input type=radio id=antwort1 name=antwort value=antwort1 required> 
		 <br>
		<label for=antwort2> B: Antwort</label> 
		<input type=radio id=antwort2 name=antwort value=antwort2 required>
		 <br>
		<label for=antwort3> C: Antwort</label> 
		<input type=radio id=antwort3 name=antwort value=antwort3 required>
		 <br>
		<label for=antwort4> D: Antwort</label>
		<input type=radio id=antwort4 name=antwort value=antwort4 required>	
	</fieldset>	
</form>
	<img><!--Hier Themenspezifische EInblendung von Hintergrundbildern--></img>
	<a href=quizseite.php> <button type=button id=previous>Vorherige Frage</button> </a>
			
	<a href=quizseite.php> <button type=button id=skip>Nächste Frage</button></a>
			
	<a href=endabrechnung.php> <button type=button id=auswertung>Zur Auswertung</button></a>
			
	<a href=Gruppen_de/regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button></a>
	<aside>
		<!-- Info: Hier soll eine Liste mit dem Fortschritt innerhalb des Quizes folgen. Es dient als Orientierungsliste für die Spielrunde. Angezeigt wird die Anzahl der noch offenen- und bereits richtig beantworteten Fragen. Die aktuelle Frage, bei der man sich befindet, wird gekennzeichnet.  -->
		<?php
			echo "<table border=1>\n";
			for ($i = 1; $i <= 20; $i++) 
			{ 
				echo "<td>Frage: $i</td>\n";
				for ($j=1; $j <= 1; $j++)
				{
					echo "<tr>\n";
				}
			}
			echo "</table>\n";
			/* Fortschrittsleiste mithilfe von PHP realisiert, es wird eine    Tabelle mit den Fragen von 1-20 angezeigt.
			*/
		?>
	</aside>
		 <!-- Hier strukt. Elemente für "Lebensanzahl", "Punktzahl" und "Zeitlimit" einfügen -->
		<?php
			// Die eingefügten Werte dienen lediglich als Platzhalter
			$versuche = 3;  	//Variable wird aus Datenbank übernommen 	
			$punktzahl = 20;  	//Variable wird aus Datenbank übernommen 
			$zeitlimit =15; 	//Variable wird aus Datenbank übernommen 
			echo "Versuche: ", $versuche, "<br>"; 
			echo "Punktzahl: ", $punktzahl, "<br>"; 
			echo "Zeitlimt: ", $zeitlimit, " sekunden", "<br>"; 	
		?>