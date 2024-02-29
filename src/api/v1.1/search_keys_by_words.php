<?php

include_once("__default_api_includes.php");

api_check_mandatory_parameter_exists("language","The mandatory 'language' parameter is missing.");
api_check_mandatory_parameter_exists("search_query","The query words.");

$language = filter_input(INPUT_GET,'language');
$search_query = filter_input(INPUT_GET,'search_query');

$r = search_by_words($language,$search_query);

$data = array("results_found" => !$r["no_results"],"result_set" => $r["result_set"]);

api_reply_with_ok($data);