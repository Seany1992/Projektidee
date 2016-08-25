<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Duellmodus</h1>	
		</header>
		
		<form action=form_eval_duellmodus.php method=POST>
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button>
			<br>
			
			<table>
			<caption> Registrierte Nutzer </caption>
			  <tr>
				<td> Spielername: </td>
				<td> Highscore: </td>
			  </tr>
			  
			  <tr>
				<td> Spieler 1 </td>
				<td> Zahlenwert 1 </td>
			  </tr>
			  
			  <tr>
				<td> Spieler 2 </td>
				<td> Zahlenwert 2 </td>
			  </tr>
			</table>	
			<!-- Info: Die Tabelle ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter), sie wird nach und nach mit Nutzern aus der Datenbank gefüllt, d.h. Die registrierten Nutzer werden aufgelistet und der Spieler kann sich einen Gegenspieler aussuchen und ihn herausfordern -->
			
			<button type=button id=start>Herausforderung absenden</button>
			<!-- Funktion: Der Spieler sucht sich einen Gegenspieler aus der Tabelle aus und fordert ihn mit der Betätigung des Buttons zu einem Multiplayerspiel heraus -->
			
			<a href=quiz.html> <button type=button id=start>Quizstart</button>
		</form>
	</body>
</html>