<?php

include_once("__default_api_includes.php");

$api_call1 = array(

	"url" => "/api/v1.2/get_available_languages.php",
	"method" => "GET",
	"description" => "Returns the list of available languages for html content elements",
	"mandatory_parameters" => array()

);

$api_call2 = array(

	"url" => "/api/v1.2/get_available_element_ranges.php",
	"method" => "GET",
	"description" => "Returns the list of available ranges of element ids",
	"mandatory_parameters" => array()

);

$api_call3 = array(

	"url" => "/api/v1.2/get_philosophy_content.php",
	"method" => "GET",
	"description" => "Returns a content in html format given the language and its id",
	"mandatory_parameters" => array(
		"language" => "The chosen language",
		"element_id" => "The id of the element to retrieve"
	)
);

$api_call4 = array(

	"url" => "/api/v1.2/search_keys_by_words.php",
	"method" => "GET",
	"description" => "Returns the results given the language and the search query",
	"mandatory_parameters" => array(
		"language" => "The chosen language",
		"search_query" => "The search query"
	)
);

$api_call5 = array(

	"url" => "/api/v1.2/get_available_documents.php",
	"method" => "GET",
	"description" => "Returns the results given the language",
	"mandatory_parameters" => array(
		"language" => "The chosen language"
	)
);

$api_call6 = array(

	"url" => "/api/v1.2/get_document_html.php",
	"method" => "GET",
	"description" => "Returns the document given the language and the document name",
	"mandatory_parameters" => array(
		"language" => "The chosen language",
		"document_name" => "The document name"
	)
);

$api_call_specification_list = array($api_call1,$api_call2,$api_call3,$api_call4,$api_calls5,$api_calls6);

api_reply_with_ok($api_call_specification_list);