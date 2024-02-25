<?php

$range_A1 = array('A',1,299);
$range_A2 = array('A',305,320);
$range_A3 = array('A',321,363);
$range_B1 = array('B',1,18);
$range_C1 = array('C',1,3);
$range_D1 = array('D',1,5);

$all_ranges = array($range_A1,$range_A2,$range_A3,$range_B1,$range_C1,$range_D1);

function get_formatted_search_element($element_specification) {
    $parts = explode("_",$element_specification);

    if (count($parts)==1) {
        $letter = substr($parts[0],0,1);
        $num = substr($parts[0],1);

        return $letter."_".str_pad($num,3,"0",STR_PAD_LEFT);
    }

    if (count($parts)==2) {
        return $parts[0]."_".str_pad($parts[1],3,"0",STR_PAD_LEFT);
    }

}

function print_range($range_specification) {
	echo "<div style='margin:10px;padding:10px;border-style:solid;border-color:black;text-align:center;'>";
    echo "<b>";
	echo $range_specification[0]."_".get_padded_number($range_specification[1])." - ".$range_specification[0]."_".get_padded_number($range_specification[2]-1);
    echo "</b>";
	echo "</div>";
}

function print_available_ranges($range_list) {

	foreach ($range_list as $range_spec) {
		print_range($range_spec);
	}
}

function get_padded_number($num) {
    return str_pad($num,3,"0",STR_PAD_LEFT);
}

function print_element($lang,$name) {

    echo "<hr />";

    $element_content = file_get_contents(ROOT_DIR."/content/philosophy/elements/".$lang."/".$name.".php");

    echo $element_content;
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