<?php


require_once('include/lang.php');

define ("ROOT_DIR",__DIR__);

require_once('include/philosophy_support_functions.php');
require_once("content/philosophy/".$lang.".php");
include_once("include/begin_html.php");
include_once("include/meta.php");
include_once("include/begin_content_with_language_switches.php");
include_once("include/menu.php");
include_once("include/top_poem.php");



?>
<div id="main_content" class="content">
    <div class="box_large">
        <?php
            if (isset($_GET["mode"])) {
                if ($_GET["mode"]=="one_element") {
                    $element = $_GET["element_key"];

                    ob_start();
                    print_element($lang,$element);
                    $content = ob_get_contents();
                    ob_end_clean();

                    echo $content;
                }
                if ($_GET["mode"]=="full_list") {
                    require_once("content/philosophy/elements/full_list.php");
                
                    echo $content;
                }
                
            } else {
                echo $search_interface;
            }
        ?>
    </div>
</div>
<?php
include_once("include/footer.php");
include_once("include/end_content.php");
include_once("include/end_html.php");
?>