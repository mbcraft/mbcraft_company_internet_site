<?php

$title_suffix = "Philosophy";
$description = "Philosophies and tips to improve the quality of life";
$keywords = "philosophy, tips, friendship";

ob_start();
?>
<h1>
	Content moved on <a href="https://www.philosophy-ideas.net/philosophy.php">www.philosophy-ideas.net</a>.
</h1>
<?php
$search_interface = ob_get_contents();
ob_end_clean();