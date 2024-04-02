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
