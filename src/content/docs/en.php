<?php

$title_suffix = "Docs";

$description = "Documents available from MBCRAFT.";
$keywords = "docs, download";

ob_start();
?>
<h1>
    Content moved on <a href="https://www.philosophy-ideas.net/docs.php">www.philosophy-ideas.net</a>.
</h1>
<?php
$content = ob_get_contents();
ob_end_clean();

?>