<?php

$title_suffix = "Customers";
$description = "Customers that asked consultancy, projects or services done by MBCRAFT";
$keywords = "marco bagnaresi, MBCRAFT, customers";

ob_start();
include_once('_customers_list.php');
$content = ob_get_contents();
ob_end_clean();
?>