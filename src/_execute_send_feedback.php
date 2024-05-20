<?php

require_once('include/captcha_functions.php');

$captcha_is_valid = validate_numeric_captcha('MBCRAFT');

if ($captcha_is_valid) {

	$language = filter_input(INPUT_POST,'language');
	$page = filter_input(INPUT_POST,'page');
	$reference = filter_input(INPUT_POST,'reference');
	$description = filter_input(INPUT_POST,'description');

	$mail_text = "";

	$mail_text .= "Lingua feedback : ".$language."\n\n\n";
	$mail_text .= "Pagina/sezione di riferimento : ".$page."\n\n\n";
	$mail_text .= "Riferimento/reference : ".$reference."\n\n\n";
	$mail_text .= "Descrizione/Description : ".$description."\n\n\n";

	mail('info@mbcraft.it', "Feedback. Origine : ".$_SERVER['SERVER_NAME'], $mail_text); 
}

require_once('include/lang.php');
include_once("include/begin_html.php");

if ($captcha_is_valid)
	require_once("content/feedback_thank_you/".$lang.".php");
else
	require_once("content/feedback_not_ok/".$lang.".php");

include_once("include/meta.php");
include_once("include/begin_content_with_language_switches.php");
include_once("include/menu.php");
include_once("include/top_poem.php");
?>
<div id="main_content" class="content">
    <div class="box_large">
        <form name="send_feedback" method="POST" action="/_execute_send_feedback.php">
            <?=$content ?>
        </form>
    </div>
</div>
<?php
include_once("include/footer.php");
include_once("include/end_content.php");
include_once("include/end_html.php");
?>