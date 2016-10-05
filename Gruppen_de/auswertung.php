
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