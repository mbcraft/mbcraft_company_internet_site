<?php

$PROJECT_DIR = dirname(__DIR__);

if (!defined("PROJECT_DIR"))
define("PROJECT_DIR",$PROJECT_DIR);

require_once(PROJECT_DIR."/include/philosophy_page_support_functions.php");

function compute_token($token) {

	$token = str_replace(" ","",$token);
	
	if (strpos($token,"[")!==false) return null;
	if (strpos($token,"<a")!==false) return null;
	if (strpos($token,"<br")!==false) return null;
	if (strpos($token,"<div")!==false) return null;
	if (strpos($token,"src=")!==false) return null;
	if (strpos($token,"<li>")!==false) return null;
	if (strpos($token,"</li>")!==false) return null;
	if (strpos($token,"/>")!==false) return null;
	if (strpos($token,"<span")!==false) return null;
	if (strpos($token,"</span>")!==false) return null;
	if (strpos($token,"class=")!==false) return null;
	if (strpos($token,"align=")!==false) return null;

	$token = str_replace("nell'","",$token);
	$token = str_replace("dell'","",$token);
	$token = str_replace("dall'","",$token);
	$token = str_replace("sull'","",$token);
	$token = str_replace("mezz'","",$token);
	$token = str_replace("all'","",$token);
	$token = str_replace("un'","",$token);
	$token = str_replace("l'","",$token);
	$token = str_replace("d'","",$token);
	$token = str_replace("'","",$token);
	$token = str_replace("\"","",$token);
	$token = str_replace("(","",$token);
	$token = str_replace(")","",$token);
	$token = str_replace(",","",$token);
	$token = str_replace(".","",$token);
	$token = str_replace(":","",$token);
	$token = str_replace("?","",$token);
	$token = str_replace("\n","",$token);
	$token = str_replace("-"," ",$token);
	$token = str_replace("+"," ",$token);
	$token = str_replace("&ldquo;"," ",$token);
	$token = str_replace("&rdquo;"," ",$token);
	$token = str_replace("["," ",$token);
	$token = str_replace("]"," ",$token);
	

	$token = html_entity_decode($token);

	$token = strtolower($token);

	$digits = ['0','1','2','3','4','5','6','7','8','9'];

	if (in_array(mb_substr($token,0,1),$digits) || in_array(mb_substr($token,1,1),$digits)) return null;

	$gt_pos = strpos($token,">");

	if ($gt_pos!==false) return null;

	if (strpos($token,'/')!==false) return null;

	$parts = explode(" ",$token);

	$unset_list = [];
	foreach ($parts as $i => $p) {
		if (strlen($p)==1) $unset_list[] = $i;
	}

	foreach ($unset_list as $u) 
	{
		unset($parts[$u]);
	}

	if (count($parts)==2) {

		return array_values($parts);
	}
	else return str_replace(" ","",$token);	
}

function get_all_words_from_element($lang,$element_id) {

	$NOT_ACTUALLY_WORDS = array('Abigail','Ratchford','Marco','Mazzotti','Alessio','Guadagnini','Tania','Moroni','Michele','Rispoli','Ravagli','Jordan','Carver','Leanne','Crow','Ikea','Magneto','Xavier','Maya','Mayan','Machu','Picchu','Chiesa','Cattolica','Catholic','Church','Vaticano','Vatican','Unione','Europea','European','Union','Aelion','Osho','Pompei','Ercolano','Pompeii','Herculaneum','Elon','Musk','Rubik','Africani','Africans','Rosa','Olindo','Falcone','Borsellino','Capaci','Giulia','Checchettin','Bruno','Bozzoli','Siciliani','Calabresi','Sicilians','Calabrians','Marvel','@pretainacio','TikTok','Arianna','Pascoli','Sonia','Grisandi','Peltier');

	$content = get_element_content($lang,get_formatted_element_id($element_id));

	$first_split = strpos($content,"-");

	$content = substr($content,$first_split+1);

	$all_words = explode(" ",$content);

	$all_cleaned_words = [];

	foreach ($all_words as $word) {
		$cleaned_word = compute_token($word);

		if ($cleaned_word != null) {
			if (is_array($cleaned_word)) {
				$all_cleaned_words[] = $cleaned_word[0];
				$all_cleaned_words[] = $cleaned_word[1];
			} else 
			{
				if (!in_array($cleaned_word,$NOT_ACTUALLY_WORDS)) {
					$all_cleaned_words[] = $cleaned_word;
				}	
			}

		}

	}

	return $all_cleaned_words;

}

function filter_word_list($word_list,$min_char_length,$max_char_length) {
	
	$result = [];

	foreach ($word_list as $w) {
		
		if ($min_char_length!==null) {
			if (mb_strlen($w)>=$min_char_length) {
				if ($max_char_length===null) $result[] = $w;
				else if (mb_strlen($w)<=$max_char_length) $result[] = $w;
			}
		} else if ($max_char_length!==null) {
			if (mb_strlen($w)<=$max_char_length) $result[] = $w;
		}

	}

	return $result;
}

function print_word_list($word_list) {
	foreach ($word_list as $w) {
		echo $w.", ";
	}
}

function get_full_word_index_by_lang($all_ranges,$lang) {

	$word_index = array();

	foreach ($all_ranges as $range_spec) {

		for ($i = $range_spec[1];$i<$range_spec[2];$i++) {
			
			$word_list = get_all_words_from_element($lang,$range_spec[0].$i);

			$filtered_word_list = filter_word_list($word_list,4,null);

			foreach ($filtered_word_list as $word) {

				if (!isset($word_index[$word])) $word_index[$word] = array();

				$element_id = $range_spec[0]."_".str_pad($i,3,"0",STR_PAD_LEFT);

				if (!in_array($element_id,$word_index[$word])) $word_index[$word][] = $element_id;

			}
		
		}
		
	}

	return $word_index;

}

echo "Rebuilding words indexes ...\n\n";

$it_word_index = get_full_word_index_by_lang($all_ranges,"it");
$it_word_index_json = json_encode($it_word_index);

$en_word_index = get_full_word_index_by_lang($all_ranges,"en");
$en_word_index_json = json_encode($en_word_index);

file_put_contents(PROJECT_DIR."/resources/it_words_index.json",$it_word_index_json);
file_put_contents(PROJECT_DIR."/resources/en_words_index.json",$en_word_index_json);

echo "Words indexes rebuilt successfully.\n\n";
