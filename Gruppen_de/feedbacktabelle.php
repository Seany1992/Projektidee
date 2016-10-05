
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