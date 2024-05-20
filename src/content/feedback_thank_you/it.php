<?php

$title_suffix = "Ringraziamento per feedback";

$description = "Ringraziamento del feedback.";
$keywords = "feedback, ringraziamento, MBCRAFT";

ob_start();
?>
<div align="center">
	<h1>
	GRAZIE PER AVER INVIATO QUESTO FEEDBACK
	</h1>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();

?>