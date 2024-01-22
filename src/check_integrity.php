<?php
/*

Created by MBCRAFT di Marco Bagnaresi - info@mbcraft.it

Version : 1.1

*/


define ("NEWLINE","<br />");

function print_hello() {

  echo "\nHello! :)\n";
}

function print_help() {

  echo "--- Parameter list :\n\n";
  echo "- check_with_online : checks all online files and returns a unique response.\n";
  echo "- check_detailed_with_online : check each file one by one and prints all differences.\n";
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

   $root_dir_list = list_directory_files("/");

   $resources_list = ["/resources/prime_numbers_list.txt","/embed/credits.php"];

   $downloads_list = list_directory_files("/downloads/");

   $content_list = ["/content/home/it.php","/content/home/en.php","/content/experiences/it.php","/content/experiences/en.php","/content/fun/it.php","/content/fun/en.php","/content/philosophy/it.php","/content/philosophy/en.php","/content/skills/it.php","/content/skills/en.php"];

   $path_list = array_merge($include_list,$css_list,$root_dir_list,$resources_list,$downloads_list,$content_list);

   return $path_list;

}

function get_printable_signature($path) {

	$result = get_file_signature($path);

        $data = "";
   	$data .= "File path : ".$path.NEWLINE;
   	$data .= "File sha1 digest : ".$result["digest"].NEWLINE;
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

function check_with_online() {

   $online_data = file_get_contents("https://www.mbcraft.it/check_integrity.php?command=print_all");
   $online_data = fix_all_br_tags($online_data);


   $offline_data = get_all_signatures();
   $offline_data = fix_all_br_tags($offline_data);

   if ($online_data == $offline_data) echo "OFFLINE AND ONLINE DATA MATCHES.\n\n";
   else { 
     echo "OFFLINE AND ONLINE DATA **DO NOT** MATCHES. !!!\n\n";
   }
}

function check_detailed_with_online() {
   $file_list = get_file_list();

   $problems_found = false;

   foreach ($file_list as $param) {
      $online_content = file_get_contents("https://www.mbcraft.it/check_integrity.php?command=checksum&param=".urlencode($param));
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

   }

   if (!$problems_found) echo "\nAll files matches.\n\n";
   else echo "\nSome files does not match. (!!!)\n\n";

}

function has_request_parameter() {
  if (isset($_GET["command"])) return true;
  else return false;
}

function has_script_parameter() {
  if ($_SERVER['argc']==2) return true;
  else return false;
}

function get_command() {

  if (has_request_parameter()) return filter_input(INPUT_GET,"command");
  if (has_script_parameter()) return $_SERVER["argv"][1];

  return null;
}

function get_sub_parameter() {

  return filter_input(INPUT_GET,"param");
}

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

if ($command == "checksum") {
   $file = get_sub_parameter();
   echo get_printable_signature($file);
   return;
}

if ($command == "check_with_online") {
   check_with_online();
   return;
}

if ($command == "check_detailed_with_online") {

   check_detailed_with_online();
   return;
}

//-----------------------------------

if (isset($_SERVER["argv"][0])) print_help();
else print_hello();

