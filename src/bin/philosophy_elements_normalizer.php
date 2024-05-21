<?php

$PROJECT_DIR = dirname(__DIR__);

if (!defined("PROJECT_DIR"))
define("PROJECT_DIR",$PROJECT_DIR);

function scan_content_files($folder) {

	$files_to_skip = array('other_notes.txt','notes.txt','note.php','end_of_booklet_statement.php');

	echo "Scanning folder : ".$folder."\n";

	$file_list = scandir($folder);

	echo "Numero elementi trovati : ".count($file_list)."\n";

	foreach ($file_list as $filename) {

		if (!is_file($folder.$filename)) continue;

		if ($filename != '.' && $filename !== '..' && !in_array($filename, $files_to_skip)) {
			echo "File di nome ".$filename." ha dimensioni : ".filesize($folder.$filename)."\n";

			$content = file_get_contents($folder.$filename);

			if (strpos($content,' ')===0) echo "==> Sono stati rilevati spazi all'inizio del file ...";

			$tokens = explode(' ',$content);

			$first_token = $tokens[0];

			echo "Prima stringa del file : ".$first_token."\n\n";

			$token_without_underscore = str_replace('_', '', $first_token);

			$first_char = $token_without_underscore[0];

			$digits = substr($token_without_underscore, 1);

			$normalized_digits = str_pad($digits,3,'0',STR_PAD_LEFT);

			$normalized_key = $first_char.'_'.$normalized_digits;

			echo "--> La chiave normalizzata sarà : ".$normalized_key."\n";

			$tokens[0] = $normalized_key;

			$fixed_content = implode(' ',$tokens);

			echo "Salvo il file con la chiave normalizzata ...\n";

			file_put_contents($folder.$filename, $fixed_content);
		}

	}
}

scan_content_files($PROJECT_DIR.'/content/philosophy/elements/it/');
scan_content_files($PROJECT_DIR.'/content/philosophy/elements/en/');