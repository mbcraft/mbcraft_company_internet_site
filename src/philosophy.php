<?php


require_once('include/lang.php');

if (!defined("PROJECT_DIR"))
define("PROJECT_DIR",__DIR__);

require_once('include/philosophy_page_support_functions.php');
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
                    $element = get_formatted_element_id($_GET["element_key"]);

                    $parts = explode('_',$element);

                    $letter = $parts[0];
                    $element_number = $parts[1];

                    echo "<h2>";
                    echo get_element_content($lang,$element);
                    echo "</h2>";
                    
                    echo $content;

                    if (filter_input(INPUT_GET,"with_back_to_results")==="true") include("include/back_to_search_results.php");
                    else include_once("include/back_to_philosophy_search_page.php");
                }

                if ($_GET["mode"]=="search_with_words") {

                    $search_query = filter_input(INPUT_GET,"search_query");

                    $r = search_by_words($lang,$search_query);

                    $no_results = $r["no_results"];
                    $current_result_list = $r["result_set"];

                    echo "<h2>";
                    if ($no_results) {
                        if ($lang=="it") {
                            echo "Non sono stati trovati risultati.";
                        } else {
                            echo "No results found.";
                        }
                    } else {
                        if ($lang=="it") {
                            echo "Risultati della ricerca : ";
                        } else {
                            echo "Results of search : ";
                        }  
                        echo "<ul>";
                        foreach ($current_result_list as $element) {
                            echo "<li>";
                            echo "<a href='/philosophy.php?with_back_to_results=true&mode=one_element&element_key=".$element."'>".$element."</a>";
                            echo "</li>";
                        }
                        echo "</li>";
                        echo "</ul>";
                    }
                    echo "</h2>";
                    include_once("include/back_to_philosophy_search_page.php");  
                    
                }


                if ($_GET["mode"]=="full_list") {

                    require_once("content/philosophy/elements/full_list.php");

                }
                
            } else {
                echo "<h2>";
                echo $search_interface;
                echo "</h2>";
            }
        ?>
    </div>
</div>
<?php
include_once("include/footer.php");
include_once("include/end_content.php");
include_once("include/end_html.php");
?>