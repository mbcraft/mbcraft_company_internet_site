<?php

$title_suffix = "Filosofia";
$description = "Consigli e tecniche utili per stare meglio";
$keywords = "filosofia, consigli, amicizia";


ob_start();
?>
<div align="center">
	Per visualizzare un elemento, inserire nella barra di ricerca la chiave corrispondente. Il carattere di sottolineatura e gli zero iniziali sono opzionali. <a href="/philosophy.php?mode=one_element&with_back_to_results=false&element_key=H_001">Leggi gli elementi 'H'</a> prima di consultare gli altri.
	Attualmente sono disponibili i seguenti range di elementi :
	<?php
	print_available_ranges($all_ranges);
	?>
	<br />
	Inserisci l'identificativo di un elemento (es: "A_123") per visualizzarlo.
	<br />
	<br />
	<form name="search_element" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="one_element" />
		<input type="hidden" name="with_back_to_results" value="false" />
		<input type="text" name="element_key" minlength="1" maxlength="5">
		<button type="submit">Visualizza</button>
	</form>
	<br />
	Se invece vuoi fare una ricerca per parole contenute al loro interno, inserisci tutte le parole che devono essere presenti in questa barra di ricerca :
	<br />
	<br />
	<form name="search_by_words" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="search_with_words" />
		<input type="text" name="search_query" minlength="3">
		<button type="submit">Cerca</button>
	</form>
	<br />
	Se invece vuoi vedere l'elenco completo, usa questo pulsante :
	<form name="full_list" action="/philosophy.php" method="GET" style="padding:10px;">
		<input type="hidden" name="mode" value="full_list" />
		<button type="submit">Elenco completo</button>
	</form>
	<br />
	<div style="text-align:left;">
		Se invece sei uno sviluppatore o una sviluppatrice e cerchi di interfacciarti tramite API, trovi qui di seguito l'elenco delle API disponibili :
		<ul>
			<li>Versione 1.0 - <a href="/api/v1.0/get_api_calls_specification.php">Specifiche</a> (formato JSON)</li>
			<li>Versione 1.1 - <a href="/api/v1.1/get_api_calls_specification.php">Specifiche</a> (formato JSON)</li>
			<li>Versione 1.2 - <a href="/api/v1.2/get_api_calls_specification.php">Specifiche</a> (formato JSON) - (<a href="/api/v1.2/sample.html">esempio embed</a>)</li> 
		</ul>
		<br />
		Se ci sono degli errori, delle imprecisioni o delle domande in merito a qualche contenuto, puoi usare la form di feedback dal link nel footer della pagina.
	</div>
</div>
<?php
$search_interface = ob_get_contents();
ob_end_clean();