<?php

function generate_black_or_colored_logo_html() {
	if (rand(0,100) % 11 == 0) generate_randomized_logo_html(true);
	else generate_randomized_logo_html(false);
}

function generate_randomized_logo_html($all_black) {

	$path_prefix = "/images/logo/parts/";

	$logo_parts = array("m_1","m_2","m_3","b_1","b_2","b_3","c_1","c_2","r","a","f_1","f_2","f_3","t_1","t_2","t_3");

	$color_folders = array("black","blue","brown","cyan","green","orange","pink","red","yellow");

	shuffle($color_folders);

	$images_paths = [];

	$color_labels = [];

	$color_index = rand(0,8);

	foreach ($logo_parts as $p)
	{
		if ($all_black) $color = "black";
		else		
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

function echo_generic_very_small_page_button($javascript_action,$background_image,$text_color,$it_label,$en_label,$additional_class) {
    
    if ($_SESSION["LANG"]=="it") {
    ?>
        <div class='w3-cell w3-mobile s3 m2 l2 p very_small_rounded'>
            <button type="button" class="very_small_page_button <?=$additional_class ?>" style="background-image: url('/images/background/<?=$background_image ?>');color:<?= $text_color ?>;" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$it_label ?></h3></button>
        </div>
    <?php
    }
    if ($_SESSION["LANG"]=="en") {
    ?>
        <div class='w3-cell w3-mobile s3 m2 l2 p very_small_rounded'>
            <button type="button" class="very_small_page_button <?=$additional_class ?>" style="background-image: url('/images/background/<?=$background_image ?>');color:<?= $text_color ?>;" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$en_label ?></h3></button>
        </div>
    <?php
    }
}



function echo_generic_small_page_button($javascript_action,$background_image,$text_color,$it_label,$en_label) {
    
    if ($_SESSION["LANG"]=="it") {
    ?>
        <div class='w3-cell w3-mobile s4 m3 l3 p small_rounded'>
            <button type="button" class="small_page_button" style="background-image: url('/images/background/<?=$background_image ?>');color:<?= $text_color ?>;" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$it_label ?></h3></button>
        </div>
    <?php
    }
    if ($_SESSION["LANG"]=="en") {
    ?>
        <div class='w3-cell w3-mobile s4 m3 l3 p small_rounded'>
            <button type="button" class="small_page_button" style="background-image: url('/images/background/<?=$background_image ?>');color:<?= $text_color ?>;" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$en_label ?></h3></button>
        </div>
    <?php
    }
}

function echo_empty_small_placeholder() {
	?>
        <div class='small_placeholder'>
        	
        </div>
	<?php
}

function echo_generic_big_page_button($javascript_action,$background_image,$text_color,$it_label,$en_label) {
    
    if ($_SESSION["LANG"]=="it") {
    ?>
        <div class='w3-cell w3-mobile s6 m6 l6 p huge_rounded'>
            <button type="button" class="big_page_button" style="background-image: url('/images/background/<?=$background_image ?>');color:<?= $text_color ?>;" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$it_label ?></h3></button>
        </div>
    <?php
    }
    if ($_SESSION["LANG"]=="en") {
    ?>
        <div class='w3-cell w3-mobile s6 m6 l6 p huge_rounded'>
            <button type="button" class="big_page_button" style="background-image: url('/images/background/<?=$background_image ?>');color:<?= $text_color ?>;" onclick="<?=$javascript_action ?>"><h3 style="font-weight: bolder;"><?=$en_label ?></h3></button>
        </div>
    <?php
    }
}

function echo_generated_randomly_filled_feedback_form_logo() {

	$current_dir = __DIR__;

	$content = file_get_contents($current_dir."/feedback_form_standard_logo.tsvg");

	$colors = array("LightGreen","MediumPurple","Indigo","Tomato","Turquoise","Orange","LightSkyBlue","Gold","Coral","Aquamarine","BlueViolet","Chartreuse","Crimson","DarkOrange","ForestGreen","SkyBlue");

	shuffle($colors);

	for ($i=1;$i<8;$i++) {

		$c = $colors[$i];

		$content = str_replace("|_f".$i."_|",$c,$content);
	}

	echo $content;


}
