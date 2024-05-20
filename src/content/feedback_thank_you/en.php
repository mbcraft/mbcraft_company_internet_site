<?php

$title_suffix = "Thanks for feedback";

$description = "Thanks for feedback.";
$keywords = "feedback, thanks, MBCRAFT";

ob_start();
?>
<div align="center">
	<h1>
	THANKS FOR SENDING THIS FEEDBACK
	</h1>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();

?>