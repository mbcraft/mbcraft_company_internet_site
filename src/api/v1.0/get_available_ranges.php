<?php

include_once("__default_api_includes.php");

function package_available_range($range_spec) {

	return array("letter" => $range_spec[0],"index_begin" => $range_spec[1],"index_end" => ($range_spec[2]-1),"descriptive_begin" => $range_spec[0]."_".$range_spec[1],"descriptive_end" => $range_spec[0]."_".($range_spec[2]-1));

}

$data = array();

$data[] = package_available_range($range_A_A);
$data[] = package_available_range($range_A_B);
$data[] = package_available_range($range_A_C);
$data[] = package_available_range($range_B_A);
$data[] = package_available_range($range_C_A);
$data[] = package_available_range($range_D_A);

api_reply_with_ok($data);
