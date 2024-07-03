<?php

include_once("__default_api_includes.php");

header("Access-Control-Allow-Origin: *");

include_once("__available_documents.php");

api_check_mandatory_parameter_exists("language","The mandatory 'language' parameter is missing.");
api_check_mandatory_parameter_exists("document_name","The mandatory 'document_name' parameter is missing.");

$selected_language = validate_language_or_reply_with_failure();
$document_name = filter_input(INPUT_GET,'document_name');

include_once("__available_documents.php");

if (in_array($document_name,$available_documents[$selected_language])) 
{
	$data = file_get_contents($PROJECT_DIR."/downloads/".$document_name.".html");

	api_reply_with_ok($data);
}