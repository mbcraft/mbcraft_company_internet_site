<?php

$title_suffix = "Documenti";

$description = "Documenti messi a disposizione da MBCRAFT.";
$keywords = "documenti, download";

ob_start();
?>
<h1>
    Contenuti spostati su <a href="https://www.philosophy-ideas.net/it/docs.php">www.philosophy-ideas.net</a>.
</h1>
<?php
$content = ob_get_contents();
ob_end_clean();

?>