<?php

$parts = explode('_',$element);

$letter = $parts[0];
$number = $parts[1];

$previous_element = str_pad($number - 1, 3, '0', STR_PAD_LEFT);
$next_element = str_pad($number + 1, 3, '0', STR_PAD_LEFT);

$current_range = $ranges_by_letter[$letter];

$is_previous_show = $number > 1;
$is_next_show = $number < $current_range[2] - 1;


?>
<div align="center">
    <?php
    if ($is_previous_show) {
    ?>
    <div align="left" class='s5 m4 l3 w3-margin' style="display:inline-block;vertical-align: middle;">
            <?php
                echo_generic_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&element_key=".$letter."_".$previous_element."';","back_to_search_button_background.jpg","white","Precedente","Previous");
            ?>
    </div>
    <?php
    }
    else echo_empty_small_placeholder();
    ?>
    <div align="center" class='s6 m5 l4 w3-margin' style="display:inline-block; vertical-align: middle;">
            <?php
                echo_generic_big_page_button("document.location.href='/philosophy.php';","back_to_search_button_background.jpg","white","Torna alla ricerca","Back to search");
            ?>
    </div>
    <?php
    if ($is_next_show) {
    ?>
    <div align="right" class='s5 m4 l3 w3-margin' style="display:inline-block; vertical-align: middle;">
            <?php
                echo_generic_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&element_key=".$letter."_".$next_element."';","back_to_search_button_background.jpg","white","Successivo","Next");
            ?>
    </div>
    <?php
    }
    else echo_empty_small_placeholder();
    ?>
</div>
    