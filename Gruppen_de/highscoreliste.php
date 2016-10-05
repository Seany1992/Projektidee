
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
			
				<a href=quizseite.php> <button type=button id=start>Neustart</button></a>
				<a href=hub.php> <button type=button id=hauptmenue>Hauptmenü</button></a>	