<?php

$current_dir = __DIR__;

$root_dir = dirname(dirname($current_dir));

define ("ROOT_DIR",$root_dir);

include_once(ROOT_DIR."/include/philosophy_support_functions.php");

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
