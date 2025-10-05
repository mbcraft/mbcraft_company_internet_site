<?php

$title_suffix = "Filosofia";
$description = "Consigli e tecniche utili per stare meglio";
$keywords = "filosofia, consigli, amicizia";


ob_start();
?>
<h1>
	Contenuto spostato su <a href="https://www.philosophy-ideas.net/it/philosophy.php">www.philosophy-ideas.net</a>.
</h1>
<?php
$search_interface = ob_get_contents();
ob_end_clean();