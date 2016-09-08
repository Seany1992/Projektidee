<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<h1>Auswertung</h1>	
		</header>	
		<main>
		<?php
			//Info: Die Anzahl der richtig beantworteten Fragen und die Erfolgsquote beim Quiz soll hier angezeigt werden (Bezeichner "x" sind momentan noch Platzhalter)"
			$richtigeAntworten = 15;
			function ausgabeRichtig ($ok)
			{
				return $ok;
			}
			$richtig= ausgabeRichtig ($richtigeAntworten);
			
			function erfolgsquote ($richtig, $fragen)
			{
				$erg = $richtig / $fragen*100;
				return $erg;
				return $richtig;
			}
			$ergebnis = erfolgsquote ($richtigeAntworten,20);
			
			echo "<p> Anzahl der richtig beantworteten Fragen: $richtig von 20 <p>";
			
			echo "<p> Ihre Erfolgsquote liegt bei: $ergebnis % <p>" ;
			// In diesem Beispiel wurden 15 von 20 möglichen Fragen richtig beantwortet. im fertigen Quiz, wird die Variable für die richtigen Antworten vom Quizteil übergeben. 
			?>
			<form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
			<?php
			$array[] = array("Platzierung: ", "Spielername: ", "Highscore: ");
			$array[] = array("Platz1", "Spieler1", "Zahlenwert1");
			$array[] = array("Platz2", "Spieler2", "Zahlenwert2");
			echo "<table>";
			foreach($array as $row) 
			{
				echo "<tr>";
				echo "<td>" . implode("</td><td>", $row) . "</td>";
				echo "</tr>";
			}
				echo "</table>";
				
				//Info: Die erzeugte Tabelle mithilfe von PHP ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter), sie wird nach und nach mit Nutzern aus der Datenbank gefüllt. Es handelt sich um die Highscore Liste, dort aufgelistet werden alle gespeicherten Nutzerprofile mitsamt ihrem Highscore 
			?>
				<a href=quiz.php> <button type=button id=start>Neustart</button></a>
				<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button></a>
			</form>
		</main>	
	</body>
</html>