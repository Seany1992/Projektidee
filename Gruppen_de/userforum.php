<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Userforum</h1> 
		</header>
		
		<main>
			<form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
				<?php
				$array[] = array("Spielername: ", "Userfeedbacks: ");
				$array[] = array("Spieler1", "Userfeedback1");
				$array[] = array("Spieler2", "Userfeedback2");
				echo "<table>";
				foreach($array as $row) 
				{
					echo "<tr>";
					echo "<td>" . implode("</td><td>", $row) . "</td>";
					echo "</tr>";
				}
					echo "</table>";
				?>	
				<!-- Info: Die erzeugteTabelle in PHP, ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter). Die Tabelle soll die eingegangenen Userfeedbacks anzeigen. Die Userfeedbacks werden in der Datenbank gespeichert und hier aufgerufen  -->
			</form>
		
			<form action=form_eval_userforum.php method=POST>
				<textarea rows=2 cols=50 name=feedback><!--Funktion: Hier wird der der Nutzer sein gewünschtes Feedback eingeben können --> </textarea>
				<br>
				
				<input type=submit value=speichern>
			</form>
				<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button></a>	
		</main>
	</body>
</html>

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Hier haben Sie noch ein Missverständnis: Es geht bei den Gruppen darum, HTML-"Fragmente" zu programmieren, die dann in andere HTML-Dokumente integriert werden können. So wie ein einzelnes Puzzle-Teil kein Bild ist, sondern nur mit anderen Puzzle-Teilen zusammen ein vollständiges Bild ergibt, sind auch die Gruppen keine vollständigen HTML-Dokumente, sondern ergeben erst gemeinsam mit anderen Gruppen (und einem umgesetzten view) ein vollständiges HTML-Dokument.

Im Gegensatz dazu haben Sie ein vollständiges HTML-Dokument erstellt.

Schauen wir uns dazu Ihren Entwurf in der strukt.html an:

[II] Userforum
-01- - Textfeld (<title> Titel vom Projekt)
-02- - Textfeld (Überschrift: h1) 
-25- - Tabelle (<table> Inhalt: neueste Feedbacks werden angezeigt)
-50- - Formular Container (Funktion: form Container)
-22- - Eingabefeld (Funktion: Feedback formulieren, in Form einer Textarea)
-23- - Schaltfläche (Label: Feedback absenden)
-49- - Schaltfläche (Label: Hauptmenü) 

Wenn Sie diesen Entwurf so umsetzen, wie Sie ihn definiert haben, ergibt sich folgende Umsetzung der Gruppe:

<title> ... </title>
<h1> ... </h1>
...
<form action=... method=...>
<input type=textarea id=... name=...>
<input type=submit>
</form>

<button action=...>

Wie Sie sehen ist hier noch ein großer Unterschied zwischen dem Entwurf und dem tatsächlichen HTML-Dokument. Deshalb kein Punkt für dieses Dokument.

-->