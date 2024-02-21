<?php

require_once('include/lang.php');
include_once("include/begin_html.php");
require_once("content/files/".$lang.".php");
include_once("include/meta.php");
include_once("include/begin_content_with_language_switches.php");
include_once("include/menu.php");
include_once("include/top_poem.php");
?>
<div id="main_content" class="content">
    <div class="box_large">
        <?= $content ?>
    </div>
</div>
<?php
include_once("include/footer.php");
include_once("include/end_content.php");
include_once("include/end_html.php");
?>