<?php

$title_suffix = "Clienti";
$description = "Clienti che hanno chiesto consulenze, progetti o servizi alla MBCRAFT";
$keywords = "marco bagnaresi, MBCRAFT, clienti";

ob_start();
include_once('_customers_list.php');
$content = ob_get_contents();
ob_end_clean();
?>