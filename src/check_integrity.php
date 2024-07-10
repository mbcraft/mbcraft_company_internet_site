<?php
/*

Created by MBCRAFT di Marco Bagnaresi - info@mbcraft.it

Version : 2.0

----

This script is used to check the integrity between the online and offline version of an internet site. 
I created it to check the integrity of my internet site.

*/


define ("NEWLINE","<br />");

/**
 * This function removes all values from an array ending with a defined text, also the corresponding key.
 */
if (!function_exists('array_remove_values_ending_with')) {
    function array_remove_values_ending_with(array $data,$values_ending_with) {

        if ($data===null) return null;

        $result = [];

        foreach ($data as $key => $value) {
            if (strpos($value,$values_ending_with)!==strlen($value)-strlen($values_ending_with)) {
                $result[$key] = $value;
            } 
        }

        return $result;
    }
}

function print_hello() {

  echo "\nHello! :)\n";
}

function print_help() {

  echo "--- Usage : php check_integrity.php HOSTNAME PARAMETER\n\n";
  echo "--- Parameter list :\n\n";
  echo "- check_with_online_file_list : checks all online files using the online file list as reference.\n";
  echo "- check_with_offline_file_list : check each file one by one and warns at the first not matching file using an offline file list.\n";
  echo "- hello : prints a hello\n";
  echo "- print_all : prints all checksums\n\n";

}

function fix_all_br_tags($text) {

   return str_replace("<br />","\n",$text);
}

function get_file_signature($path) {

   $date = date("d-m-Y",filemtime(__DIR__.$path));
   $digest = sha1_file(__DIR__.$path);

   return ["date" => $date,"digest" => $digest];   
}

function list_directory_files($dir_path) {

   $file_list = scandir(__DIR__.$dir_path);

   $result = [];

   foreach ($file_list as $f) {
      if ($f != '.' && $f != "..") {
         
         if (is_file(__DIR__.$dir_path.$f)) $result[] = $dir_path.$f;
      }
   }

   return $result;

}

function get_file_list() {

   $include_list = list_directory_files("/include/");

   $css_list = list_directory_files("/css/");

   $PROJECT_DIR_list = list_directory_files("/");

   $PROJECT_DIR_list = array_remove_values_ending_with($PROJECT_DIR_list,".html");

   $PROJECT_DIR_list = array_remove_values_ending_with($PROJECT_DIR_list,".txt");

   $PROJECT_DIR_list = array_remove_values_ending_with($PROJECT_DIR_list,".xml");

   $resources_list = ["/resources/prime_numbers_list.txt","/embed/credits.php"];

   $downloads_list = list_directory_files("/downloads/");

   $content_list = ["/content/feedback/it.php","/content/feedback/en.php","/content/feedback_send_error/it.php","/content/feedback_send_error/en.php","/content/feedback_thank_you/it.php","/content/feedback_thank_you/en.php","/content/philosophy/it.php","/content/philosophy/en.php","/content/home/it.php","/content/home/en.php","/content/experiences/it.php","/content/experiences/en.php","/content/fun/it.php","/content/fun/en.php","/content/skills/it.php","/content/skills/en.php","/content/about_internet_site/it.php","/content/about_internet_site/en.php","/content/files/it.php","/content/files/en.php"];

   $ph_it_list = list_directory_files("/content/philosophy/elements/it/");

   $ph_en_list = list_directory_files("/content/philosophy/elements/en/");

   $meme_list = list_directory_files("/pages/");

   $path_list = array_merge($include_list,$css_list,$PROJECT_DIR_list,$resources_list,$downloads_list,$content_list,$ph_en_list,$ph_it_list,$meme_list);

   return $path_list;

}

function get_printable_signature($path) {

	$result = get_file_signature($path);

   $data = "";
   $data .= "File path : ".$path.NEWLINE;
   $data .= "File sha1 digest : ".$result["digest"].NEWLINE;
   $data .= "---END OF SIGNATURE---".NEWLINE;
   $data .= NEWLINE.NEWLINE;

   return $data;
}

function get_all_signatures() {
  
   $path_list = get_file_list();

   $data = "--- Checking file signatures ---".NEWLINE.NEWLINE;

   foreach ($path_list as $path) {
       $data .= get_printable_signature($path);    
   }

   return $data;
}

function print_file_list_differences($online_file_list,$offline_file_list) {
   $online_file_map = [];
   $offline_file_map = [];

   foreach ($online_file_list as $elem) {
      $online_file_map1[$elem] = "ONLINE ONLY";
      $online_file_map2[$elem] = "ONLINE ONLY";
   }
   foreach ($offline_file_list as $elem) {
      $offline_file_map1[$elem] = "OFFLINE ONLY";
      $offline_file_map2[$elem] = "OFFLINE ONLY";
   }

   foreach ($online_file_map1 as $key => $status) {
      unset($offline_file_map1[$key]);
   }

   foreach ($offline_file_map2 as $key => $status) {
      unset($online_file_map2[$key]);
   }

   echo "File list differences :\n\n";

   foreach ($offline_file_map1 as $key => $status) {
      echo $key." --- ".$status."\n";
   }
   foreach ($online_file_map2 as $key => $status) {
      echo $key." --- ".$status."\n";
   }
}

function check_with_online_file_list($hostname) {

   echo "Checking online files using online file list ...\n\n";

   $online_file_list_text = file_get_contents("https://".$hostname."/check_integrity.php?command=get_file_list");
   $online_file_list = explode("|",$online_file_list_text);

   $offline_file_list = get_file_list();

   if (count($online_file_list)!=count($offline_file_list)) {
      echo "Online file list count differs from offline file list count.\n\n";

      echo "Online files count : ".count($online_file_list)."\n";
      echo "Offline files count : ".count($offline_file_list)."\n";
      echo "\n";

      print_file_list_differences($online_file_list,$offline_file_list);
      return;
   }

   for ($i=0;$i<count($online_file_list);$i++) {
      if ($online_file_list[$i] != $offline_file_list[$i]) {
         echo "Online file element differs from offline file element!!\n\n";
         echo "Online file : ".$online_file_list[$i]."\n";
         echo "Offline file : ".$offline_file_list[$i]."\n";
      }
   }

   $online_data = file_get_contents("https://www.mbcraft.it/check_integrity.php?command=print_all");
   $online_data = fix_all_br_tags($online_data);
   $online_data_elements = explode("---END OF SIGNATURE---",$online_data);


   $offline_data = get_all_signatures();
   $offline_data = fix_all_br_tags($offline_data);
   $offline_data_elements = explode("---END OF SIGNATURE---",$offline_data);

   if ($online_data == $offline_data) echo "OFFLINE AND ONLINE DATA MATCHES.\n\n";
   else { 
     echo "OFFLINE AND ONLINE DATA **DO NOT** MATCHES. !!!\n\n";

     for ($i=0;$i<count($online_data_elements);$i++) {

         if ($online_data_elements[$i] != $offline_data_elements[$i]) {
            echo "--- ONLINE VERSION :\n";
            echo $online_data_elements[$i];
            echo "--- OFFLINE VERSION :\n";
            echo $offline_data_elements[$i];
         }
     }
   }
}

function check_with_offline_file_list($hostname) {
   $file_list = get_file_list();

   $problems_found = false;

   echo "Checking online files using offline file list ...\n\n";

   foreach ($file_list as $param) {
      $online_content = file_get_contents("https://".$hostname."/check_integrity.php?command=checksum&param=".urlencode($param));
      $online_content = fix_all_br_tags($online_content);     

      $offline_content = get_printable_signature($param);
      $offline_content = fix_all_br_tags($offline_content);

      if ($online_content != $offline_content) {
         echo "Content of file ".$param." does not matches!!\n\n";
         echo "--ONLINE--\n";
         echo $online_content;
         echo "--OFFLINE--\n";
         echo $offline_content;

         $problems_found = true;
      }

      if ($problems_found) break;
   }

   if (!$problems_found) echo "\nAll files matches.\n\n";
   else echo "\nSome files does not match. (!!!)\n\n";

}

function has_request_parameter() {
  if (isset($_GET["command"])) return true;
  else return false;
}

function has_script_parameter() {
  if ($_SERVER['argc']==3) return true;
  else return false;
}

function get_hostname() {
   return $_SERVER["argv"][1];
}

function get_command() {

  if (has_request_parameter()) return filter_input(INPUT_GET,"command");
  if (has_script_parameter()) return $_SERVER["argv"][2];

  return null;
}

function get_sub_parameter() {

  return filter_input(INPUT_GET,"param");
}

$hostname = get_hostname();

$command = get_command();

if ($command == "hello") {
   print_hello();
   return;
}

if ($command == "print_all") {
   $text = get_all_signatures();
   if (has_script_parameter()) $text = fix_all_br_tags($text);
   echo $text;

   return;
}

if ($command == "get_file_list") {

   if (has_script_parameter()) {
      $file_list = get_file_list();
      foreach ($file_list as $element) {
         echo $element.NEWLINE;
      }
      return;
   }

   $file_list = get_file_list();
   $result = implode("|",$file_list);

   echo $result;

   return;
}

if ($command == "checksum") {
   $file = get_sub_parameter();
   echo get_printable_signature($file);
   return;
}

if ($command == "check_with_online_file_list") {
   check_with_online_file_list($hostname);
   return;
}

if ($command == "check_with_offline_file_list") {

   check_with_offline_file_list($hostname);
   return;
}

//-----------------------------------

if (isset($_SERVER["argv"][0])) print_help();
else print_hello();

