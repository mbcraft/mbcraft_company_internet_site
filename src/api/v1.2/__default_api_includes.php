<?php

$current_dir = __DIR__;

$PROJECT_DIR = dirname(dirname($current_dir));

if (!defined("PROJECT_DIR"))
define("PROJECT_DIR",$PROJECT_DIR);

include_once(PROJECT_DIR."/include/philosophy_page_support_functions.php");

function api_reply_with_ok($data) {

	$result = array(

		"status" => "ok",
		"data" => $data
	);

	header("Content-Type: application/json;");

	echo json_encode($result);

	exit;
}

function api_reply_with_error($message) {

	$result = array("status" => "error",
		"message" => $message
	);

	header("Content-Type: application/json;");

	echo json_encode($result);

	exit;
}

function api_check_mandatory_parameter_exists($parameter_name,$error_message) {

	$p = filter_input(INPUT_GET,$parameter_name);

	if ($p == null) api_reply_with_error($error_message);

}

function validate_language_or_reply_with_failure() {

	$lang = filter_input(INPUT_GET,'language');

	if ($lang!=="it" && $lang!=="en") api_reply_with_error("Invalid language selected. Only Italian (it) and English/American (en) are available as choices. Sorry.");

	return $lang;
}

function validate_element_id_or_reply_with_failure() {
	
	$element_id = filter_input(INPUT_GET,'element_id');

	if (strlen($element_id)>7) api_reply_with_error("The element id looks like invalid. Try using an element id formatted like K_123 ...");

	return $element_id;
}