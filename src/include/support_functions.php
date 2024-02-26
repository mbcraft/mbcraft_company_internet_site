<?php

function generate_black_or_colored_logo_html() {
	if (rand(0,100) % 11 == 0) generate_black_logo_html();
	else generate_randomized_logo_html();
}

function generate_black_logo_html() {
	echo "<div align='center'>";
    echo "<img src='/images/logo/logo_mbcraft_final_black.png' alt='logo' width='400'/>";
    echo "</div>";
}

function generate_randomized_logo_html() {

	$path_prefix = "/images/logo/parts/";

	$logo_parts = array("m_1","m_2","m_3","b_1","b_2","b_3","c_1","c_2","r","a","f_1","f_2","f_3","t_1","t_2","t_3");

	$color_folders = array("black","blue","brown","cyan","green","orange","pink","red","yellow");

	shuffle($color_folders);

	$images_paths = [];

	$color_labels = [];

	$color_index = rand(0,8);

	foreach ($logo_parts as $p)
	{		
		$color = $color_folders[$color_index];

		$color_labels[] = $color;

		$images_paths[] = $path_prefix.$color.'/'.$p.'.png';
	
		$color_index++;

		$color_index %= 9;
	}

	echo "<div align='center' style='position:relative;padding:10px;padding-top:50px;left:-250px;height:150px;'>";

	foreach ($images_paths as $i => $path) {
		echo "<img src='".$path."' style='position:absolute;' width='500' alt='MBCRAFT logo part : ".$logo_parts[$i]." with ".$color_labels[$i]." color' />";
	}

	echo "</div>";


}

function hello() {
	return 12345;
}

function extract_random_prime_5_digits() {

	if (file_exists(__DIR__.'/../resources/prime_numbers_list.txt')) {

		$file_content = file_get_contents(__DIR__.'/../resources/prime_numbers_list.txt');

		$prime_number_list = explode("\n",$file_content);

		return $prime_number_list[rand(0,count($prime_number_list)-1)];
	} else return "!!!!!";
}

function echo_back_to_previous_page_button($javascript_action,$it_label,$en_label) {
    
    if ($_SESSION["LANG"]=="it") {
    ?>
        <div class='w3-cell w3-mobile w3-padding-16 s6 m6 l6 p huge_rounded'>
            <button type="button" class="back_to_previous_page_button" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$it_label ?></h3></button>
        </div>
    <?php
    }
    if ($_SESSION["LANG"]=="en") {
    ?>
        <div class='w3-cell w3-mobile w3-margin s6 m6 l6 p huge_rounded'>
            <button type="button" class="back_to_previous_page_button" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$en_label ?></h3></button>
        </div>
    <?php
    }
}