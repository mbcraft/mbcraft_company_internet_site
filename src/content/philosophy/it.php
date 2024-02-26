<?php

$title_suffix = "Filosofia";
$description = "Consigli e tecniche utili per stare meglio";
$keywords = "filosofia, consigli, amicizia";


ob_start();
?>
Per visualizzare un elemento, inserire nella barra di ricerca la chiave corrispondente. Il carattere di sottolineatura e gli zero iniziali sono opzionali.
Attualmente sono disponibili i seguenti range di elementi :
<?php
print_available_ranges($all_ranges);
?>
<div align="center">
	<form name="search_element" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="one_element" />
		<input type="text" name="element_key" minlength="1" maxlength="5">
		<button type="submit">Visualizza</button>
	</form>
	<br />
	Se invece vuoi vedere l'elenco completo, usa questo pulsante :
	<form name="full_list" action="/philosophy.php" method="GET" style="padding:10px;">
		<input type="hidden" name="mode" value="full_list" />
		<button type="submit">Elenco completo</button>
	</form>
</div>
<?php
$search_interface = ob_get_contents();
ob_end_clean();