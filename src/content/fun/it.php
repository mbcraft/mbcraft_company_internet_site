<?php

$title_suffix = "Divertimento";

$description = "Alcuni meme che ho realizzato";
$keywords = "meme, divertimento";

ob_start();
?>
<h1>
	Contenuti spostati su <a href="https://www.philosophy-ideas.net/it/fun.php">www.philosophy-ideas.net</a>.
</h1>
<?php

$content = ob_get_contents();
ob_end_clean();
?>