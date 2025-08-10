<?php

$parts = explode('_',$element);

$letter_series = array('H','A','B','C','D','T','Z');
//$letter_series_previous = array('H' => null,'A' => 'H','B' => 'A','C' => 'B','D' => 'C', 'T' => 'D','Z' => 'T');
//$letter_series_next = array('H' => 'A','A' => 'B','B' => 'C','C' => 'D','D' => 'T','T' => 'Z','Z' => null);

$letter = $parts[0];
$number = $parts[1];

$previous_element = str_pad($number - 1, 3, '0', STR_PAD_LEFT);
$next_element = str_pad($number + 1, 3, '0', STR_PAD_LEFT);

$current_range = $ranges_by_letter[$letter];

$is_previous_show = $number > 1;
$is_next_show = $number < $current_range[2] - 1;

//$lang is defined

?>
<div align="center">
    <?php
    if ($is_previous_show) {
    ?>
    <div align="left" class='s5 m4 l3 w3-margin' style="display:inline-block;vertical-align: middle;">
            <?php
                echo_generic_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=".$letter."_".$previous_element."';","back_to_search_button_background.jpg","white","Precedente","Previous");
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
                echo_generic_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=".$letter."_".$next_element."';","back_to_search_button_background.jpg","white","Successivo","Next");
            ?>
    </div>
    <?php
    }
    else echo_empty_small_placeholder();
    ?>
</div>
<div align="center">
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=H_001';","back_to_search_button_background.jpg","white","[ H ]","[ H ]","v_1");
    ?>
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=A_001';","back_to_search_button_background.jpg","white","[ A ]","[ A ]","v_2");
    ?>
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=B_000';","back_to_search_button_background.jpg","white","[ B ]","[ B ]","v_3");
    ?>
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=C_001';","back_to_search_button_background.jpg","white","[ C ]","[ C ]","v_4");
    ?>
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=D_001';","back_to_search_button_background.jpg","white","[ D ]","[ D ]","v_5");
    ?>
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=T_001';","back_to_search_button_background.jpg","white","[ T ]","[ T ]","v_6");
    ?>
    <?php
        echo_generic_very_small_page_button("document.location.href='/philosophy.php?mode=one_element&with_back_to_results=false&lang=".$lang."&element_key=Z_001';","back_to_search_button_background.jpg","white","[ Z ]","[ Z ]","v_7");
    ?>
</div>    