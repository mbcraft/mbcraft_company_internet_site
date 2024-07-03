<?php

include_once("__default_api_includes.php");

header("Access-Control-Allow-Origin: *");

api_check_mandatory_parameter_exists("language","The mandatory 'language' parameter is missing.");
api_check_mandatory_parameter_exists("element_id","The mandatory 'element_id' parameter is missing.");

$selected_language = validate_language_or_reply_with_failure();

$selected_element_id = validate_element_id_or_reply_with_failure();

$formatted_element_id = get_formatted_element_id($selected_element_id);

$server = $_SERVER['HTTP_HOST'];

$credits = "<!-- Element embedded from ".$server." - id : ".$formatted_element_id." -->";

$element_content = get_element_content($selected_language,$formatted_element_id);

$last_modified_time = get_element_last_modified_time($selected_language,$formatted_element_id);

$is_embed = filter_input(INPUT_GET,"embed");

if ($is_embed) {

	echo $element_content.$credits;

	exit;

}
else {

	$data = array("content" => $element_content,"last_modified_time" => $last_modified_time);

	api_reply_with_ok($data);

}