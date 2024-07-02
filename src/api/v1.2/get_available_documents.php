<?php

include_once("__default_api_includes.php");

api_check_mandatory_parameter_exists("language","The mandatory 'language' parameter is missing.");

$selected_language = validate_language_or_reply_with_failure();

include_once("__available_documents.php");

return api_reply_with_ok($available_documents[$selected_language]);