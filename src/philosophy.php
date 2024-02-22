<?php


require_once('include/lang.php');
include_once("include/begin_html.php");
require_once("content/philosophy/".$lang.".php");
include_once("include/meta.php");
include_once("include/begin_content_with_language_switches.php");
include_once("include/menu.php");
include_once("include/top_poem.php");

$range_A1 = array('A',1,299);
$range_A2 = array('A',305,320);
$range_A3 = array('A',321,358);
$range_B1 = array('B',1,18);
$range_C1 = array('C',1,3);
$range_D1 = array('D',1,5);

function get_padded_number($num) {
    return str_pad($num,3,"0",STR_PAD_LEFT);
}

function print_element($lang,$name) {

    echo "<hr />";

    $content = file_get_contents(__DIR__."/content/philosophy/elements/".$lang."/".$name.".php");

    echo $content;
}

function print_indexed_element($lang,$letter,$i) {

    $number = get_padded_number($i);

    print_element($lang,$letter."_".$number);

}

function print_range_by_specification($lang,$specification) {

    $letter = $specification[0];
    $start = $specification[1];
    $end = $specification[2];

    for ($i = $start;$i<$end;$i++) {
        print_indexed_element($lang,$letter,$i);
    }

}

ob_start();

print_element($lang,"introduction");
print_range_by_specification($lang,$range_A1);
print_range_by_specification($lang,$range_A2);
print_range_by_specification($lang,$range_A3);
print_element($lang,"note");
print_range_by_specification($lang,$range_B1);
print_element($lang,"end_of_booklet_statement");
print_range_by_specification($lang,$range_C1);
print_range_by_specification($lang,$range_D1);

$content = ob_get_contents();
ob_end_clean();

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