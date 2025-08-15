<?php

$title_suffix = "Files";

$description = "Files messi a disposizione da MBCRAFT.";
$keywords = "files, download";

ob_start();
?>
<h1>
    Contenuti spostati su <a href="https://www.philosophy-ideas.net/files.php">www.philosophy-ideas.net</a>.
</h1>
<?php
$content = ob_get_contents();
ob_end_clean();

?>