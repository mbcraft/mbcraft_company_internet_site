<?php

$title_suffix = "Thanks for feedback";

$description = "Thanks for feedback.";
$keywords = "feedback, thanks, MBCRAFT";

$thank_you_statement = array(

"A cat now thinks about you ...","A duck, somewhare, is watching the stars ...","An hamster has made a draw of your face in the lair ...","A koala now knows that can rely also on you ...","A panda rolls off a cliff and inflicts 3d6 psycological damages to your worst enemy ...","A serpent will go around in circles to fasten the loading of the app you're using ..."
);

$s = $thank_you_statement[rand(0,count($thank_you_statement)-1)];

ob_start();
?>
<div align="center">
	<h1>
	THANKS FOR SENDING THIS FEEDBACK : <?=$s ?>
	</h1>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();

?>