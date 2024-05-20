<?php

function generate_numeric_captcha_elements($prefix) {

    $control_code = rand(100,999);

    $control_code_html = $control_code;

    $shadowing_items = array('fried_chips_with_venom','killer_tomatoes','ninja','sonic_wall','insults','stop_wasting_your_time','dont_eat_meat','dont_eat_fish','flying_cat_guardian','rhino_hamster','spider_pear','stop_now','STOP_NOW_BUT_BIGGER','obsidian_recursive_refrigerator','refrigere-thor','SDF_AAA__OOOO____EEEEEEEE','the_lone_evil_shark');

    $iterations = rand(30,50);

    for ($i=0;$i<$iterations;$i++) {

        $p = $shadowing_items[rand(0,count($shadowing_items)-1)];

        $trash1 = "<span style='display:none;'>".rand(100,999)."</span>";

        $trash2 = "<span style='display:none;'>".rand(100,999)."</span>";

        if (rand(0,10)%2==0) $trash1 = "";
        if (rand(0,10)%2==0) $trash2 = "";

        $control_code_html = "<span class='".$p."'>".$trash1.$control_code_html.$trash2."</span>";
    }

    $hidden_control_code_check = sha1($prefix.'_'.$control_code.'_FORM_CAPTCHA');

    return ['captcha_html' => $control_code_html,'hidden_control_code_check' => $hidden_control_code_check];
}

function validate_numeric_captcha($prefix) {
    $control_code = filter_var($_POST['control_code']);
    $control_code_check = filter_var($_POST['hidden_control_code_check']);

    $hidden_control_code_check = sha1($prefix.'_'.$control_code.'_FORM_CAPTCHA');

    return $control_code_check == $hidden_control_code_check;
}

?>