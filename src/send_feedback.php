<?php

require_once('include/captcha_functions.php');

$c = generate_numeric_captcha_elements('MBCRAFT');

$captcha_html = $c['captcha_html'];
$hidden_control_code_check = $c['hidden_control_code_check'];

$element_type = filter_input(INPUT_GET, "element_type");
$element_id = filter_input(INPUT_GET, "element_id");

require_once('include/lang.php');
include_once("include/begin_html.php");
require_once("content/feedback/".$lang.".php");
include_once("include/meta.php");
include_once("include/begin_content_with_language_switches.php");
include_once("include/menu.php");
include_once("include/top_poem.php");


define('FEEDBACK_FORM_PAGE',true);
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