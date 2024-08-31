<?php

session_start();

if (!isset($_SESSION["LANG"])){
    if (strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"],"it")===0)
        $_SESSION["LANG"]="it";
    else
        $_SESSION["LANG"]="en";
}

if (isset($_POST["LANG"]) || isset($_GET["lang"])) {
    
    if (isset($_GET["lang"]))
        $my_lang = filter_input(INPUT_GET,"lang");
    else
        $my_lang = filter_input(INPUT_POST, "LANG");

    if ($my_lang=="it" || $my_lang=="en") {
        $_SESSION["LANG"] = $my_lang;
    }
}

$lang = $_SESSION["LANG"];