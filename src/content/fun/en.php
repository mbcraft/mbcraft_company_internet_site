<?php

$title_suffix = "Fun";

$description = "Some meme i made";
$keywords = "meme, fun";

ob_start();
?>
<h1>
	Content moved on <a href="https://www.philosophy-ideas.net/en/fun.php">www.philosophy-ideas.net</a>.
</h1>
<?php

$content = ob_get_contents();
ob_end_clean();
?>