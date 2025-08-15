<?php

$title_suffix = "File";

$description = "Files available from MBCRAFT.";
$keywords = "files, download";

ob_start();
?>
<h1>
    Content moved on <a href="https://www.philosophy-ideas.net/files.php">www.philosophy-ideas.net</a>.
</h1>
<?php
$content = ob_get_contents();
ob_end_clean();

?>